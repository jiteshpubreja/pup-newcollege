<?php

namespace App\Http\Controllers;

use App\College;
use App\Discrepancy;
use App\DiscrepancyCategory;
use App\Inspection;
use App\InspectionAssignment;
use App\InspectionMember;
use App\InspectionReportMember;
use App\InspectionSchedule;
use App\Traits\PDFGenerator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    use PDFGenerator;
	protected $teacher;

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function isNotTeacher() {
        $this->teacher = Auth::user()->isTeacher();
        if(!$this->teacher) {
            return true;
        }
        return false;
    }

    protected function validatorinspection(array $data)
    {
        return Validator::make($data, [
            'finalremarks' => 'required',
            ]);
    }





    public function index() {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }
        return view('university.teacher.index');
    }

    public function addinspection() {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }
        $assignment = InspectionAssignment::where('id_teacher',$this->teacher->id)->first();
        $categories = DiscrepancyCategory::get();
        if($assignment And $assignment->members->count()){

            if($assignment->schedule){
                $day = Carbon::now()->addDays(-1)->diffInDays($assignment->schedule->date,false);
                if($day <= 0){
                    return view('university.teacher.addinspection',compact('categories'))->with('assignment',$assignment);
                }
                return view('university.teacher.inspectionmessages')->with('assignment',$assignment);
            }
            return view('university.teacher.inspectionmessages')->with('assignment',$assignment);
        }
        else {
            $assignment = InspectionMember::where('id_teacher',$this->teacher->id)->first();
            if($assignment){
                return view('university.teacher.inspectionmessages')->with('member',$assignment);
            }
            return view('university.teacher.addinspection',compact('categories'));
        }
    }

    public function addinspectionpost(Request $request) {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }
        $input = $request->all();
        $validator = $this->validatorinspection($input);
        if ($validator->passes()){
            $inspection = Inspection::create([
                'id_college' => $input['collegeid'],
                'id_teacher' => Auth::user()->isTeacher()->id,
                'final_remarks' => $input['finalremarks'],
                ]);

            for ($i=1; $i <= $input['count']; $i++) { 
                Discrepancy::create([
                    'id_discrepancy_list' => $input['discrepancyid'.$i],
                    'id_college' => $input['collegeid'],
                    'is_discrepancy' => $input['isdiscrepancy'.$i],
                    'remarks' => $input['remarks'.$i],
                    'id_inspection' => $inspection['id'],
                    ]);
            }

            $assignment = InspectionAssignment::where('id_teacher',$inspection->id_teacher)->where('id_college',$inspection->id_college)->first();

            foreach ($assignment->members as $member) {
                InspectionReportMember::create([
                    'id_inspection' => $inspection['id'],
                    'id_teacher' => $member->id_teacher,
                    ]);
            }
            $assignment->delete();
            return back()->with('success','Inspection Submitted Sucessfully');
        }
        return back()->with('errors',$validator->errors());
    }




    public function scheduleinspection() {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }
        $assignment = InspectionAssignment::where('id_teacher',$this->teacher->id)->first();
        if($assignment And $assignment->members->count()){ 
            $schedule = $assignment->schedule;
            if($schedule){
                return view('university.teacher.scheduleinspection')->with('assignment',$assignment)->with('schedule',$schedule);
            }
            return view('university.teacher.scheduleinspection')->with('assignment',$assignment);
        }
        else {
            $assignment = InspectionMember::where('id_teacher',$this->teacher->id)->first();
            if($assignment){
                return view('university.teacher.inspectionmessages')->with('member',$assignment);
            }
            return view('university.teacher.scheduleinspection');
        }
        
    }

    public function scheduleinspectionpost(Request $request) {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }
        $input = $request->all();
        $assignment = InspectionAssignment::where('id_teacher',$this->teacher->id)->first();
        
        if($assignment And $assignment->members->count()){
            $input['id_assignment'] = $assignment->id;
            $validator = Validator::make($input, [
                'id_assignment' => 'required|exists:inspection_assignments,id',
                'date' => 'required'
                ]);


            if ($validator->passes()){

                $date = Carbon::createFromFormat('Y-m-d H', $input['date'].' 18');


                $schedule = InspectionSchedule::create([
                    'id_assignment' => $input['id_assignment'],
                    'date' => $date,
                    ]);


                return back()->with('success','Inspection Sucessfully Scheduled on '.$date->toFormattedDateString().' for '.$assignment->college->form->college_name);
            }
            return back()->with('errors',$validator->errors());
        }
        return back();
    }

    

    public function viewinspection($inspectionid = null) {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }
        $inspections = Inspection::where('id_teacher',$this->teacher->id)->orderBy('created_at','desc')->get();

        
        if($inspections->count()){ 
            if($inspectionid) {
                $inspectionid = Inspection::where('id_teacher',$this->teacher->id)->where('id',$inspectionid)->first();
                $categories = DiscrepancyCategory::get();
                return view('university.teacher.viewinspection',compact('inspections','categories'))->with('inspectionid',$inspectionid);
            }
            else {

                return view('university.teacher.viewinspection',compact('inspections'));
            }
        }
        else {
            return view('university.teacher.viewinspection');
        }
        
        
    }

    

    public function viewinspectionpdf($inspectionid = null) {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }
        $inspectionid = Inspection::where('id_teacher',$this->teacher->id)->where('id',$inspectionid)->first();
        if($inspectionid) {
            $categories = DiscrepancyCategory::get();
            $page="LEGAL";
            $letterexists=false;
            $font="helvetica";

            $this->getPDF(view('university.reports.inspection',compact('inspections','categories'))->with('inspectionid',$inspectionid)->render(),$letterexists,$font,$page);
        }
        else {
            return abort(404);
        }
    }
}
