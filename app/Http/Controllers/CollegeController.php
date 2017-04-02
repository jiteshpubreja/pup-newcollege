<?php

namespace App\Http\Controllers;

use App\CollegeNewRegistration;
use App\CollegeUploadedFile;
use App\FeePayment;
use App\FeeStructure;
use App\InspectionRequest;
use App\Traits\PDFGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CollegeController extends Controller
{

    use PDFGenerator;


    protected $college;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function isNotCollege() {
    	$this->college = Auth::user()->isCollege();
    	if(!$this->college) {
    		return true;
    	}
    	return false;
    }

    protected function validatornewcollege(array $data)
    {
        return Validator::make($data, [
            'id_college' => 'required',
            'college_name' => 'required|max:255',
            'session' => 'required|max:255',
            'courses' => 'required|max:255',
            'co_education' => 'required|max:255',
            'railway_station' => 'required|max:255',
            'bus_stand' => 'required|max:255',
            'post_office' => 'required|max:255',
            'telegram' => 'required|max:255',
            'college_phone_number' => 'required|max:11',
            'principal_phone_number' => 'required|max:11',
            'president_of_mgmt_committee' => 'required|max:11',
            'secretary_office' => 'required|max:11',
            'principal_residence_phone' => 'required|max:11',
            'principal_office_building' => 'required|max:255',
            'classes_count' => 'required|max:255',
            'classes_size' => 'required|max:255',
            'staff_room' => 'required|max:255',
            'commonroom_for_girls' => 'required|max:255',
            'commonroom_for_boys' => 'required|max:255',
            'reading_room' => 'required|max:255',
            'readingroom_size' => 'required|max:255',
            'periodical_room' => 'required|max:255',
            'periodical_room_size' => 'required|max:255',
            'studyroom_for_staff' => 'required|max:255',
            'studyroom_for_staff_size' => 'required|max:255',
            'science_lab' => 'required|max:255',
            'science_lab_size' => 'required|max:255',
            'another_store_room' => 'required|max:255',
            'water_supply' => 'required|max:255',
            'electricity' => 'required|max:255',
            'boys_washroom' => 'required|max:255',
            'girls_washroom' => 'required|max:255',
            'other_details' => 'required|max:255',
            'residence_for_principal' => 'required|max:255',
            'required_furniture' => 'required|max:255',
            'land_details' => 'required',
            'endorsement_fund' => 'required|max:255',
            'endorsement_fund_details' => 'required',
            'resources' => 'required|max:255',
            'resources_detail' => 'required|max:255',
            'bank_balance' => 'required|max:255',
            'provision_of_25000' => 'required|max:255',
            'every_year_10000' => 'required|max:255',
            'any_other_amount' => 'required|max:255',
            'register_committee' => 'required|max:255',
            'within_5mile' => 'required|max:255',
            'any_other_college_name' => 'required|max:255',
            'early_members' => 'required|max:255',
            'appoint_qualifiedfaculty' => 'required|max:255',
            'salary_acc_ugc' => 'required|max:255',
            ]);
    }

    protected function validatordraft(array $data)
    {
        return Validator::make($data, [
            'id_college' => 'required',
            'president_name' => 'required|max:255',
            'purpose' => 'required|max:255',
            'amount' => 'required|max:255',
            'draft_no' => 'required|max:255',
            'bank_name' => 'required|max:255',
            'dated' => 'required|max:255',
            ]);
    }





    public function index() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        return view('university.college.index');
    }





    public function viewrejectedapplications($applicationid = null) {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        $college = Auth::user()->isCollege();
        $applications = CollegeNewRegistration::onlyTrashed()->where('id_college',$college->id)->orderBy('deleted_at','desc')->get();
        if($applications->count()){ 
            $applicationid = CollegeNewRegistration::onlyTrashed()->where('id_college',$college->id)->where('id',$applicationid)->first();
            if($applicationid) {
                return view('university.college.forms.applyviewrejected',compact('applications'))->with('form',$applicationid);
            }
            else {

                return view('university.college.forms.applyviewrejected',compact('applications'));
            }
        }
        else {
            return view('university.college.forms.applyviewrejected');
        }
    }





    public function viewapplicationpdf() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        $college = Auth::user()->isCollege();
        $form = $college->form;
        if($form){
            if($form->is_submitted){

                $page="LEGAL";
            $letterexists=false;
            $font="helvetica";
            $this->getPDF(view('university.reports.application')->with('form',$form)->render(),$letterexists,$font,$page);
        }
            else
                return abort(404);
        }
        return abort(404);
    }

    public function applynewcollege() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        $college = Auth::user()->isCollege();
        $form = $college->form;
        if($form){
            if($form->is_submitted)
                return view('university.college.forms.applyview')->with('form',$form);
            else
                return view('university.college.forms.applyedit')->with('form',$form);
        }
        if(isset($_GET['old'])){
            $applicationid = CollegeNewRegistration::onlyTrashed()->where('id_college',$college->id)->where('id',$_GET['old'])->first();
            return view('university.college.forms.applyfromold')->with('form',$applicationid);
        }
        return view('university.college.forms.apply');
    }

    public function applynewcollegepost(Request $request) {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }

        $input = $request->all();
        $input['id_college'] = Auth::user()->isCollege()->id;
        $input['ref_id'] = "PUP".mt_rand(1000000, 9999999);
        while(!(Validator::make($input, ['ref_id' => 'required|unique:college_new_registeration'])->passes())){
            $input['ref_id'] = "PUP".mt_rand(1000000, 9999999);
        }
        $validator = $this->validatornewcollege($input);
        if ($validator->passes()){
            $application = CollegeNewRegistration::create($input)->toArray();
            return back()->with('success',$application['ref_id'].' Generated Sucessfully');
        }
        return back()->with('errors',$validator->errors());
    }

    public function applynewcollegeput(Request $request) {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }

        $form = Auth::user()->isCollege()->form;

        $input = $request->all();
        $input['id_college'] = $form->id_college;
        $input['ref_id'] = $form->ref_id;
        $validator = $this->validatornewcollege($input);
        if ($validator->passes()){
            $application = $form->update($input);
            return back()->with('success',$form['ref_id'].' Updated Sucessfully');
        }
        return back()->with('errors',$validator->errors());
    }




    public function applynewcollegesubmitput() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }

        $form = Auth::user()->isCollege()->form;

        
        if(!$form->is_submitted) {
            $form->is_submitted = true;
            $form->save();
        }
        return back()->with('success',$form['ref_id'].' Submitted Sucessfully');
    }





    public function uploadsupportingdocs() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        $college = Auth::user()->isCollege();
        $form = $college->form;
        
        if($form){
            $files = CollegeUploadedFile::where('ref_id',$form->ref_id)->get()->toArray();
            $list = array();
            foreach ($files as $file) {
                $list[$file['filetype']]=$file['path'];
            }
            if($files){
                return view('university.college.forms.uploaddocuments')->with('form',$form)->with('files',$list);
            }
            return view('university.college.forms.uploaddocuments')->with('form',$form);
        }
        return view('university.college.forms.uploaddocuments');
    }

    public function uploadsupportingdocspost(Request $request) {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        $college = Auth::user()->isCollege();
        $form = $college->form;
        $destination = 'uploads/'.$form->ref_id.'/';
        $count = 0;
        $failed = 0;

        if($request->hasFile('landdetails')) {
            $file = $request->file('landdetails');
            if( strcmp(Str::lower($file->getClientOriginalExtension()), "pdf")==0){
                $name = 'landdetails'.'.'.$file->getClientOriginalExtension();
                $file->move($destination,$name);
                CollegeUploadedFile::create([
                    'id_college'=>$college->id,
                    'ref_id'=>$form->ref_id,
                    'filetype'=>'landdetails',
                    'path'=> route('collegedownload',['refid'=>$form->ref_id,'filename'=>$name])
                    ]);
                $count++;
            }
            else
                $failed++;
            
        }

        if($request->hasFile('buildingdetails')) {
            $file = $request->file('buildingdetails');
            if( strcmp(Str::lower($file->getClientOriginalExtension()), "pdf")==0){
                $name = 'buildingdetails'.'.'.$file->getClientOriginalExtension();
                $file->move($destination,$name);
                CollegeUploadedFile::create([
                    'id_college'=>$college->id,
                    'ref_id'=>$form->ref_id,
                    'filetype'=>'buildingdetails',
                    'path'=> route('collegedownload',['refid'=>$form->ref_id,'filename'=>$name])
                    ]);
                $count++;
            }
            else
                $failed++;
        }

        if($request->hasFile('bankproofs')) {
            $file = $request->file('bankproofs');
            if( strcmp(Str::lower($file->getClientOriginalExtension()), "pdf")==0){
                $name = 'bankproofs'.'.'.$file->getClientOriginalExtension();
                $file->move($destination,$name);
                CollegeUploadedFile::create([
                    'id_college'=>$college->id,
                    'ref_id'=>$form->ref_id,
                    'filetype'=>'bankproofs',
                    'path'=> route('collegedownload',['refid'=>$form->ref_id,'filename'=>$name])
                    ]);
                $count++;
            }
            else
                $failed++;
        }

        if($request->hasFile('permissionletters')) {
            $file = $request->file('permissionletters');
            if( strcmp(Str::lower($file->getClientOriginalExtension()), "pdf")==0){
                $name = 'permissionletters'.'.'.$file->getClientOriginalExtension();
                $file->move($destination,$name);
                CollegeUploadedFile::create([
                    'id_college'=>$college->id,
                    'ref_id'=>$form->ref_id,
                    'filetype'=>'permissionletters',
                    'path'=> route('collegedownload',['refid'=>$form->ref_id,'filename'=>$name])
                    ]);
                $count++;
            }
            else
                $failed++;
        }

        if($request->hasFile('comitteelist')) {
            $file = $request->file('comitteelist');
            if( strcmp(Str::lower($file->getClientOriginalExtension()), "pdf")==0){
                $name = 'comitteelist'.'.'.$file->getClientOriginalExtension();
                $file->move($destination,$name);
                CollegeUploadedFile::create([
                    'id_college'=>$college->id,
                    'ref_id'=>$form->ref_id,
                    'filetype'=>'comitteelist',
                    'path'=> route('collegedownload',['refid'=>$form->ref_id,'filename'=>$name])
                    ]);
                $count++;
            }
            else
                $failed++;
        }

        if($request->hasFile('tehsildocuments')) {
            $file = $request->file('tehsildocuments');
            if( strcmp(Str::lower($file->getClientOriginalExtension()), "pdf")==0){
                $name = 'tehsildocuments'.'.'.$file->getClientOriginalExtension();
                $file->move($destination,$name);
                CollegeUploadedFile::create([
                    'id_college'=>$college->id,
                    'ref_id'=>$form->ref_id,
                    'filetype'=>'tehsildocuments',
                    'path'=> route('collegedownload',['refid'=>$form->ref_id,'filename'=>$name])
                    ]);
                $count++;
            }
            else
                $failed++;
        }

        if($count)
            return back()->with('success',$count.' Files Uploaded Sucessfully with '.$failed.' failures');
        else if($failed)
            return back()->with('error',$count.' Files Uploaded Sucessfully with '.$failed.' failures');
        else
            return back()->with('error','Please Select Atleast One File To Upload');
    }





    public function uploaddraft() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }

        $college = Auth::user()->isCollege();
        $form = $college->form;
        if($form){
            $structures = FeeStructure::get();
            $payments = FeePayment::where('id_college',$college->id)->orderBy('created_at','desc')->get();

            return view('university.college.forms.uploaddrafts',compact('structures'))->with('payments',$payments);
        }
        return view('university.college.forms.uploaddrafts');


    }

    public function uploaddraftpost(Request $request) {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        if($request->hasFile('draft_image')) {
            $file = $request->file('draft_image');

            $college = Auth::user()->isCollege();
            $destination = 'uploads/'.$college->user->id.'/';

            $input = $request->all();
            $input['id_college'] = $college->id;

            if(strcmp($input['purpose'],"Other") == 0)
                $input['purpose'] = $input['purpose_other'];

            if( (strcmp(Str::lower($file->getClientOriginalExtension()), "pdf")==0) or 
                (strcmp(Str::lower($file->getClientOriginalExtension()), "jpg")==0)){
                $validator = $this->validatordraft($input);
            if ($validator->passes()){
                $name = "Draft-".mt_rand(1000000, 9999999).'.'.Str::lower($file->getClientOriginalExtension());

                $file->move($destination,$name);
                $input['draft_image'] = url($destination.$name);

                FeePayment::create($input);

                return back()->with('success',' Draft Uploaded Sucessfully.');

            }
            return back()->with('errors',$validator->errors());
        }
        else
            return back()->with('error','Draft Document Should Be .pdf or .jpg');
    }
    return back()->with('error','Please Select Draft Document To Upload');
}





public function requestinspection() {
    if($this->isNotCollege()) {
        return Redirect::route('home');
    }
    $college = Auth::user()->isCollege();
    $request = $college->inspectionrequest;
    $assignment = $college->inspectionassignment;
    $form = $college->form;
    if($form){
        if($request)
            return view('university.college.forms.inspectionrequest')->with('form',$form)->with('request',$request);
        elseif($assignment)
            return view('university.college.forms.inspectionrequest')->with('form',$form)->with('assignment',$assignment);
        else
            return view('university.college.forms.inspectionrequest')->with('form',$form);
    }
    return view('university.college.forms.inspectionrequest');
}


public function scheduledinspectionletter() {
    if($this->isNotCollege()) {
        return Redirect::route('home');
    }
    $college = Auth::user()->isCollege();
    $request = $college->inspectionrequest;
    $assignment = $college->inspectionassignment;
    $form = $college->form;
    if($form){
        if($assignment And $assignment->members->count()){
            if($assignment->schedule){

                $page="LEGAL";
                $letterexists=true;
                $font="anmollipi";
                $this->getPDF(view('university.reports.letters.scheduledinspection')->with('assignment',$assignment)->render(),$letterexists,$font,$page);
            }
            return abort(404);
        }
        return abort(404);
    }
    return abort(404);
}

public function requestinspectionpost(Request $request) {
    if($this->isNotCollege()) {
        return Redirect::route('home');
    }
    $college = Auth::user()->isCollege();
    $request = $college->inspectionrequest;
    $form = $college->form;
    if($form){
        if($form->is_loi_granted){
            InspectionRequest::create(['id_college' => $college->id]);
            return back()->with('success','Inspection Requested Sucessfully.');
        }
        return back();
    }

}

public function downloads() {
    if($this->isNotCollege()) {
        return Redirect::route('home');
    }

    $list = array();
    $college = Auth::user()->isCollege();
    $request = $college->inspectionrequest;
    $assignment = $college->inspectionassignment;
    $form = $college->form;
    if($form){
        if($assignment And $assignment->members->count()){
            if($assignment->schedule){
                $list['Application Form'] = route('collegeviewapplicationpdf');
                $list['Inspection Letter'] = route('scheduledinspectionletter');


                return view('university.college.downloads')->with('downloads',$list);
            }
            return view('university.college.downloads');
        }
        return view('university.college.downloads');
    }
    return view('university.college.downloads');
}






}
