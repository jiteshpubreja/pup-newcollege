<?php

namespace App\Http\Controllers;

use App\CollegeNewRegistration;
use App\CollegeUploadedFile;
use App\DiscrepancyCategory;
use App\FeePayment;
use App\Inspection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DeanController extends Controller
{
    
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
                return view('university.dean.applications.view',compact('applications'))->with('form',$collegeid);
            }
            else {

                return view('university.dean.applications.view',compact('applications'));
            }
        }
        else {
            return view('university.clerk.applications.view');
        }
        
        
    }


    public function viewappdocs($collegeid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        $collegeid = CollegeNewRegistration::where('id',$collegeid)->first();

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




    

    public function generateloi($collegeid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        if($collegeid) {
            $collegeid = CollegeNewRegistration::where('id',$collegeid)->first();

            if(!$collegeid->is_loi_granted) {
                $collegeid->is_loi_granted = true;
                $collegeid->save();
            }
            return back()->with('success', 'Letter of Intent <strong>(LOI)</strong> Granted Sucessfully');
        }
        else {

            return back();
        }
        
        
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
                return view('university.dean.inspections.viewinspection',compact('inspections','categories'))->with('inspectionid',$inspectionid);
            }
            else {

                return view('university.dean.inspections.viewinspection',compact('inspections'));
            }
        }
        else {
            return view('university.dean.inspections.viewinspection');
        }
        
        
    }




    

    public function approveinspection($inspectionid = null) {
        if($this->isNotDean()) {
            return Redirect::route('home');
        }
        if($inspectionid) {
            $inspectionid = Inspection::where('id',$inspectionid)->first();

            if(!$inspectionid->is_approved_by_dean) {
                $inspectionid->is_approved_by_dean = true;
                $inspectionid->save();
            }
            return back()->with('success', 'Inspection Approved Sucessfully');
        }
        else {

            return back();
        }
    }










}
