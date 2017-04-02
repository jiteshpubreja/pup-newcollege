<?php

namespace App\Http\Controllers;

use App\College;
use App\CollegeNewRegistration;
use App\CollegeUploadedFile;
use App\DiscrepancyCategory;
use App\DiscrepancyList;
use App\FeePayment;
use App\FeeStructure;
use App\Inspection;
use App\InspectionRequest;
use App\Traits\PDFGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class ClerkController extends Controller
{
   use PDFGenerator;
   protected $clerk;

   public function __construct()
   {
    $this->middleware('auth');
}

public function isNotClerk() {
   $this->clerk = Auth::user()->isClerk();
   if(!$this->clerk) {
      return true;
  }
  return false;
}





public function index() {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    } 
    return view('university.clerk.index');
}




public function adddiscrepancycategory() {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $categories = DiscrepancyCategory::get()->toArray();
    return view('university.clerk.discrepancies.addcategory',compact('categories'));
}
public function adddiscrepancycategorypost(Request $request) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $category = (new DiscrepancyCategory)->addcategory($request->all());
    if(isset($category->id)){
        return back()->with('success', $category->name.' Created Sucessfully as Discrepancy Category');
    }
    else{
        return back()->with('errors',$category);
    }
}




public function adddiscrepancylist() {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $categories = DiscrepancyCategory::get();
    $lists = DiscrepancyList::get();
    return view('university.clerk.discrepancies.add',compact('categories','lists'));
}
public function adddiscrepancylistpost(Request $request) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $list = (new DiscrepancyList)->adddiscrepancy($request->all());
    if(isset($list->id)){
        return back()->with('success', $list->name.' Created Sucessfully as Discrepancy');
    }
    else{
        return back()->with('errors',$list);
    }
}




public function addfeestructure() {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $feestructures = FeeStructure::get();
    return view('university.clerk.fees.addstructure',compact('feestructures'));
}
public function addfeestructurepost(Request $request) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $list = (new FeeStructure)->addfeestructure($request->all());
    if(isset($list->id)){
        return back()->with('success', $list->name.' Created Sucessfully as Fee Structure');
    }
    else{
        return back()->with('errors',$list);
    }
}






public function viewinspection($inspectionid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $inspections = Inspection::orderBy('is_forwarded_to_dean','asc')->orderBy('is_seen_by_clerk','asc')->orderBy('created_at','desc')->get();
    
    if($inspections->count()){ 
        $inspectionid = Inspection::where('id',$inspectionid)->first();
        if($inspectionid) {
            if(!$inspectionid->is_seen_by_clerk) {
                $inspectionid->is_seen_by_clerk = true;
                $inspectionid->save();
            }
            $categories = DiscrepancyCategory::get();
            return view('university.clerk.inspections.viewinspection',compact('inspections','categories'))->with('inspectionid',$inspectionid);
        }
        else {
            return view('university.clerk.inspections.viewinspection',compact('inspections'));
        }
    }
    else {
        return view('university.clerk.inspections.viewinspection');
    }
}

public function viewinspectionpdf($inspectionid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    
    $inspectionid = Inspection::where('id',$inspectionid)->first();
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






public function forwardinspection($inspectionid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    if($inspectionid) {
        $inspectionid = Inspection::where('id',$inspectionid)->first();

        if(!$inspectionid->is_forwarded_to_dean) {
            $inspectionid->is_forwarded_to_dean = true;
            $inspectionid->save();
        }
        return back()->with('success', 'Inspection Forwarded Sucessfully');
    }
    else {

        return back();
    }
}






public function viewapplication($collegeid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $applications = CollegeNewRegistration::where('is_submitted',true)->orderBy('is_forwarded_to_dean','asc')->orderBy('is_seen_by_clerk','asc')->orderBy('created_at','desc')->get();
    
    if($applications->count()){ 
        $collegeid = CollegeNewRegistration::where('id',$collegeid)->where('is_submitted',true)->first();
        if($collegeid) {
            if(!$collegeid->is_seen_by_clerk) {
                $collegeid->is_seen_by_clerk = true;
                $collegeid->save();
            }
            return view('university.clerk.applications.view',compact('applications'))->with('form',$collegeid);
        }
        else {
            return view('university.clerk.applications.view',compact('applications'));
        }
    }
    else {
        return view('university.clerk.applications.view');
    }
}


public function viewapplicationpdf($collegeid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $applications = CollegeNewRegistration::where('is_submitted',true)->orderBy('is_forwarded_to_dean','asc')->orderBy('is_seen_by_clerk','asc')->orderBy('created_at','desc')->get();
    
    if($applications->count()){ 
        $collegeid = CollegeNewRegistration::where('id',$collegeid)->where('is_submitted',true)->first();
        if($collegeid) {

            $page="LEGAL";
            $letterexists=false;
            $font="helvetica";
            $this->getPDF(view('university.reports.application')->with('form',$collegeid)->render(),$letterexists,$font,$page);
        }
        else {
            return abort(404);
        }
    }
    else {
        return abort(404);
    }
}


public function viewapplicationrejects($collegeid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $applications = CollegeNewRegistration::onlyTrashed()->orderBy('deleted_at','desc')->get();
    
    if($applications->count()){ 
        $collegeid = CollegeNewRegistration::onlyTrashed()->where('id',$collegeid)->first();
        if($collegeid) {
            return view('university.clerk.applications.viewrejected',compact('applications'))->with('form',$collegeid);
        }
        else {

            return view('university.clerk.applications.viewrejected',compact('applications'));
        }
    }
    else {
        return view('university.clerk.applications.viewrejected');
    }
    
    
}






public function forwardapplication($collegeid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    if($collegeid) {
        $collegeid = CollegeNewRegistration::where('id',$collegeid)->first();

        if(!$collegeid->is_forwarded_to_dean) {
            $collegeid->is_forwarded_to_dean = true;
            $collegeid->save();
        }
        return back()->with('success', 'Application Forwarded Sucessfully');
    }
    else {
        return back();
    }
    
    
}






public function rejectapplication($collegeid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    if($collegeid) {
        $collegeid = CollegeNewRegistration::where('id',$collegeid)->first();

        $collegeid->delete();
        return back()->with('success', 'Application Rejected Sucessfully');
    }
    else {

        return back();
    }
    
    
}


public function viewappdocs($collegeid = null) {
    if($this->isNotClerk()) {
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
            return view('university.clerk.applications.viewdocuments')->with('form',$collegeid)->with('files',$list);
        }
        return view('university.clerk.applications.viewdocuments')->with('form',$collegeid);
    }
    return view('university.clerk.applications.viewdocuments');
}

public function viewdrafts($collegeid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $collegeid = CollegeNewRegistration::withTrashed()->where('id',$collegeid)->first();

    if($collegeid){
        $payments = FeePayment::where('id_college',$collegeid->college->id)->get();
        
        if($payments->count()){
            return view('university.clerk.applications.viewdrafts')->with('form',$collegeid)->with('payments',$payments);
        }
        return view('university.clerk.applications.viewdrafts')->with('form',$collegeid);
    }
    return view('university.clerk.applications.viewdrafts');
}

public function viewalldrafts() {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $collegeid = CollegeNewRegistration::withTrashed()->first();

    if($collegeid){
        $payments = FeePayment::orderBy('is_verified','asc')->orderBy('created_at','desc')->get();
        
        if($payments->count()){
            return view('university.clerk.applications.viewdrafts')->with('form',$collegeid)->with('payments',$payments);
        }
        return view('university.clerk.applications.viewdrafts')->with('form',$collegeid);
    }
    return view('university.clerk.applications.viewdrafts');
}


public function approvedrafts($draftid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $draft = FeePayment::find($draftid);
    if($draft){
        if(!$draft->is_verified) {
            $draft->is_verified = true;
            $draft->verified_by = Auth::user()->isClerk()->id;
            $draft->save();
        }
        return back()->with('success', 'Draft Verified Sucessfully');
    }
    return back();
}






public function clerkviewrequest() {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    $requests = InspectionRequest::orderBy('is_forwarded_to_dean','asc')->orderBy('created_at','desc')->get();
    
    if($requests->count()){ 
        return view('university.clerk.inspections.viewrequests',compact('requests'));
    }
    return view('university.clerk.inspections.viewrequests');
}

public function clerkforwardrequest($requestid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }

    if($requestid){
        $request = InspectionRequest::find($requestid);
        if($request){
            if(!$request->is_forwarded_to_dean) {
                $request->is_forwarded_to_dean = true;
                $request->save();
            }
            return back()->with('success', 'Request Forwarded Sucessfully');
        }
        else {
            return back();
        }
    }
    else {
        return back();
    }
}

public function clerkrejectrequest($requestid = null) {
    if($this->isNotClerk()) {
        return Redirect::route('home');
    }
    

    if($requestid){
        $request = InspectionRequest::find($requestid);
        if($request){
            $request->delete();
            return back()->with('success', 'Request Rejected Sucessfully');
        }
        else {
            return back();
        }
    }
    else {
        return back();
    }
}
}