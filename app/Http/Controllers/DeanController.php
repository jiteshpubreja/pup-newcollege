<?php

namespace App\Http\Controllers;

use App\Backnote;
use App\College;
use App\CollegeNewRegistration;
use App\CollegeUploadedFile;
use App\DiscrepancyCategory;
use App\FeePayment;
use App\Inspection;
use App\InspectionAssignment;
use App\InspectionMember;
use App\InspectionRequest;
use App\Specialization;
use App\Teacher;
use App\Traits\PDFGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DeanController extends Controller
{


    use PDFGenerator;

    protected $dean;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function isNotDean() {
    	$this->dean = Auth::user()->isDean();
    	if(!$this->dean) {
    		return true;
    	}
    	return false;
    }





    public function index() {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        return view('university.dean.index');
    }

    public function viewbacknotespdf($collegeid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $collegeid = College::where('id',$collegeid)->first();
        if($collegeid) {
            $page="LEGAL";
            $letterexists=false;
            $font="helvetica";
            $title="Backnotes";
            $this->getPDF(view('university.reports.backnotes')->with('collegeid',$collegeid)->render(),$letterexists,$font,$page,$title);
        }
        else {

            return abort(404);
        }
    }

    public function viewbacknotes($collegeid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }

        $colleges = College::get();

        if($colleges->count()){ 
            $collegeid = College::where('id',$collegeid)->first();
            if($collegeid) {
                return view('university.dean.viewbacknotes',compact('colleges'))->with('collegeid',$collegeid);
            }
            else {

                return view('university.dean.viewbacknotes',compact('colleges'));
            }
        }
        else {
            return view('university.dean.viewbacknotes');
        }
    }

    public function viewdrafts() {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $payments = FeePayment::where('is_verified',true)->orderBy('created_at','desc')->get();

        if($payments->count()){
            return view('university.dean.applications.viewdrafts')->with('payments',$payments);
        }
        return view('university.dean.applications.viewdrafts');
    }


    public function viewapplication($collegeid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $applications = CollegeNewRegistration::where('is_forwarded_to_dean',true)->orderBy('is_loi_granted','asc')->orderBy('is_seen_by_dean','asc')->orderBy('created_at','desc')->get();
        
        if($applications->count()){ 
            $collegeid = CollegeNewRegistration::where('id',$collegeid)->where('is_submitted',true)->first();
            if($collegeid) {

                if(!$collegeid->is_seen_by_dean) {
                    $collegeid->is_seen_by_dean = true;
                    $collegeid->save();
                }

                $backnote = Backnote::where('id_college',$collegeid->college->id)->where('ref_id',$collegeid->ref_id)->where('purpose',"application")->where('user_type',"clerk")->first();

                $files = CollegeUploadedFile::where('ref_id',$collegeid->ref_id)->get()->toArray();
                $list = array();
                foreach ($files as $file) {
                    $list[$file['filetype']]=$file['path'];
                }
                if($files){
                    return view('university.dean.applications.view',compact('applications'))->with('form',$collegeid)->with('files',$list)->with('backnote',$backnote);
                }
                return view('university.dean.applications.view',compact('applications'))->with('form',$collegeid)->with('backnote',$backnote);
            }
            else {
                return view('university.dean.applications.view',compact('applications'));
            }
        }
        else {
            return view('university.clerk.applications.view');
        }
    }


    public function viewapplicationrejects($collegeid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $applications = CollegeNewRegistration::onlyTrashed()->orderBy('is_seen_by_dean','asc')->orderBy('deleted_at','desc')->get();

        if($applications->count()){ 
            $collegeid = CollegeNewRegistration::onlyTrashed()->where('id',$collegeid)->first();
            if($collegeid) {
                if(!$collegeid->is_seen_by_dean) {
                    $collegeid->is_seen_by_dean = true;
                    $collegeid->save();
                }
                return view('university.dean.applications.viewrejected',compact('applications'))->with('form',$collegeid);
            }
            else {

                return view('university.dean.applications.viewrejected',compact('applications'));
            }
        }
        else {
            return view('university.dean.applications.viewrejected');
        }


    }


    public function viewapplicationpdf($collegeid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $collegeid = CollegeNewRegistration::withTrashed()->where('id',$collegeid)->where('is_submitted',true)->first();
        if($collegeid) {
            $page="LEGAL";
            $letterexists=false;
            $font="helvetica";
            $title="College Application";
            $this->getPDF(view('university.reports.application')->with('form',$collegeid)->render(),$letterexists,$font,$page,$title);
        }
        else {
            return abort(404);
        }
    }


    public function viewappdocs($collegeid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $collegeid = CollegeNewRegistration::withTrashed()->where('id',$collegeid)->first();

        if($collegeid){
            $files = CollegeUploadedFile::where('ref_id',$collegeid->ref_id)->get()->toArray();
            $list = array();
            foreach ($files as $file) {
                $list[$file['filetype']]=$file['path'];
            }
            if($files){
                return view('university.dean.applications.viewdocuments')->with('form',$collegeid)->with('files',$list);
            }
            return view('university.dean.applications.viewdocuments')->with('form',$collegeid);
        }
        return view('university.dean.applications.viewdocuments');
    }




    

    public function generateloi($collegeid = null,Request $request) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $input = $request->all();
        if($collegeid) {
            $collegeid = CollegeNewRegistration::where('id',$collegeid)->first();
            $validator = Validator::make($input, ['remarks' => 'required']);

            if($validator->passes()){
                if(!$collegeid->is_loi_granted) {

                    Backnote::create([
                        'id_college' => $collegeid->college->id,
                        'ref_id' => $collegeid->college->form->ref_id,
                        'purpose' => "application",
                        'remarks' => $input['remarks'],
                        'id_user' => Auth::user()->id,
                        'user_type' => "dean",
                        ]);


                    $collegeid->is_loi_granted = true;
                    $collegeid->save();
                }
                return back()->with('success', 'Letter of Intent <strong>(LOI)</strong> Granted Sucessfully');

            }
            else
                return back()->with('errors',$validator->errors());
        }
        else {

            return back();
        }
        
        
    }



    public function deanviewrequest() {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $requests = InspectionRequest::where('is_forwarded_to_dean',true)->get();
        
        if($requests->count()){ 
            return view('university.dean.inspections.viewrequests',compact('requests'));
        }
        return view('university.dean.inspections.viewrequests');
    }



    public function deanassignconvener($requestid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $teachers = Teacher::get();
        $requestid = InspectionRequest::where('is_forwarded_to_dean',true)->where('id',$requestid)->first();
        
        if($requestid){ 
            $assignment = InspectionAssignment::where('id_college',$requestid->college->id)->first();
            if($assignment){
                return view('university.dean.inspections.assignconvener')->with('requestid',$requestid)->with('assignment',$assignment);
            }
            if($teachers->count()){ 
                return view('university.dean.inspections.assignconvener',compact('teachers'))->with('requestid',$requestid);
            }
            return view('university.dean.inspections.assignconvener')->with('requestid',$requestid);
        }
        return view('university.dean.inspections.assignconvener');
    }



    public function deanassignconvenerpost(Request $request,$requestid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $requestid = InspectionRequest::where('is_forwarded_to_dean',true)->where('id',$requestid)->first();
        if($requestid){

            $input = $request->all();
            $input['id_college'] = $requestid->college->id;

            $validator = Validator::make($input, [
                'id_college' => 'required|exists:college_applicants,id',
                'id_teacher' => 'required|exists:teachers,id'
                ]);
            if ($validator->passes()){
                $assignment = InspectionAssignment::create($input);
                return redirect()->route('deanviewrequest')->with('success',$assignment->teacher->user->fullname().' Assigned Sucessfully as Convener to '.$assignment->college->form->college_name);
            }
            return back()->with('errors',$validator->errors());
        }
        return back();
    }



    public function deanassignmembers($requestid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $requestid = InspectionRequest::where('is_forwarded_to_dean',true)->where('id',$requestid)->first();
        
        if($requestid){ 
            $assignment = InspectionAssignment::where('id_college',$requestid->college->id)->first();
            if($assignment){

                $teachers = Teacher::where('id','!=',$assignment->id_teacher)->get();
                $members = InspectionMember::where('id_assignment',$assignment->id)->get();


                if($members->count()){
                    return view('university.dean.inspections.assignmembers')->with('requestid',$requestid)->with('assignment',$assignment)->with('members',$members);
                }
                if($teachers->count()){ 
                    $specializations = Specialization::get();
                    if($specializations->count()){
                        return view('university.dean.inspections.assignmembers',compact('teachers'))->with('requestid',$requestid)->with('assignment',$assignment)->with('specializations',$specializations);

                    }
                    return view('university.dean.inspections.assignmembers',compact('teachers'))->with('requestid',$requestid)->with('assignment',$assignment);
                }
                return view('university.dean.inspections.assignmembers')->with('requestid',$requestid)->with('assignment',$assignment);
            }
            return view('university.dean.inspections.assignmembers')->with('requestid',$requestid);
        }
        return view('university.dean.inspections.assignmembers');
    }



    public function deanassignmemberspost(Request $request,$requestid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }

        $requestid = InspectionRequest::where('is_forwarded_to_dean',true)->where('id',$requestid)->first();
        if($requestid){
            $assignment = InspectionAssignment::where('id_college',$requestid->college->id)->first();
            if($assignment){

                $input = $request->all();
                $input['id_assignment'] = $assignment->id;
                $validator = Validator::make($input, [
                    'id_assignment' => 'required|exists:inspection_assignments,id',
                    'id_teacher' => 'required|exists:teachers,id'
                    ]);
                if ($validator->passes()){

                    foreach ($input['id_teacher'] as $teacher) {
                        InspectionMember::create([
                            'id_assignment' => $input['id_assignment'],
                            'id_teacher' => $teacher,
                            ]);
                    }
                    $requestid->delete();
                    return redirect()->route('deanviewrequest')->with('success',count($input['id_teacher']).' Members Assigned Sucessfully to Inspection Team For '.$assignment->college->form->college_name);
                }
                return back()->with('errors',$validator->errors());
            }
            return back();
        }
        return back();
    }

    

    public function viewinspection($inspectionid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $inspections = Inspection::where('is_forwarded_to_dean',true)->orderBy('is_approved_by_dean','asc')->orderBy('is_seen_by_dean','asc')->orderBy('created_at','desc')->get();
        
        if($inspections->count()){ 
            $inspectionid = Inspection::where('id',$inspectionid)->first();
            if($inspectionid) {

                if(!$inspectionid->is_seen_by_dean) {
                    $inspectionid->is_seen_by_dean = true;
                    $inspectionid->save();
                }
                $categories = DiscrepancyCategory::get();
                $backnote = Backnote::where('id_inspection',$inspectionid->id)->where('user_type',"clerk")->first();

                return view('university.dean.inspections.viewinspection',compact('inspections','categories'))->with('inspectionid',$inspectionid)->with('backnote',$backnote);
            }
            else {
                return view('university.dean.inspections.viewinspection',compact('inspections'));
            }
        }
        else {
            return view('university.dean.inspections.viewinspection');
        }
    }

    

    public function viewinspectionpdf($inspectionid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        
        $inspectionid = Inspection::where('id',$inspectionid)->first();
        if($inspectionid) {
            $categories = DiscrepancyCategory::get();
            $page="LEGAL";
            $letterexists=false;
            $font="helvetica";
            $title="Inspection Report";
            $this->getPDF(view('university.reports.inspection',compact('inspections','categories'))->with('inspectionid',$inspectionid)->render(),$letterexists,$font,$page,$title);
        }
        else {
            return abort(404);
        }
    }




    

    public function approveinspection($inspectionid = null,Request $request) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $input = $request->all();
        if($inspectionid) {
            $inspectionid = Inspection::where('id',$inspectionid)->first();
            $validator = Validator::make($input, ['remarks' => 'required']);

            if($validator->passes()){
                if(!$inspectionid->is_approved_by_dean) {

                    Backnote::create([
                        'id_college' => $inspectionid->college->id,
                        'ref_id' => $inspectionid->college->form->ref_id,
                        'purpose' => "inspection",
                        'remarks' => $input['remarks'],
                        'id_inspection' => $inspectionid->id,
                        'id_user' => Auth::user()->id,
                        'user_type' => "dean",
                        ]);


                    $inspectionid->is_approved_by_dean = true;
                    $inspectionid->save();
                }
                return back()->with('success', 'Inspection Approved Sucessfully');

            }
            else
                return back()->with('errors',$validator->errors());
        }

        else {

            return back();
        }
    }










}
