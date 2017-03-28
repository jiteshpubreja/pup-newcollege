<?php

namespace App\Http\Controllers;

use App\College;
use App\Discrepancy;
use App\DiscrepancyCategory;
use App\Inspection;
use App\InspectionAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{

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
        if($assignment){ 
            $collegeid = $assignment->id_college;
            return view('university.teacher.addinspection',compact('categories'))->with('collegeid',$collegeid);
        }
        else {
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
            $assignment->delete();
            return back()->with('success','Inspection Submitted Sucessfully');
        }
        return back()->with('errors',$validator->errors());
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
}
