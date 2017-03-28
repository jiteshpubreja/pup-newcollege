<?php

namespace App\Http\Controllers;

use App\CollegeNewRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CollegeController extends Controller
{

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





    public function index() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        return view('university.college.index');
    }





    public function applynewcollege() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        $form = Auth::user()->isCollege()->form;
        if($form){
            if($form->is_submitted)
                return view('university.college.forms.applyview')->with('form',$form);
            else
                return view('university.college.forms.applyedit')->with('form',$form);
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
}
