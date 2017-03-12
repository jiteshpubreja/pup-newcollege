<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Clerk;
use App\Dean;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    
    protected $admin;

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function isNotAdmin() {
    	$this->admin = Auth::user()->isAdmin();
    	if(!$this->admin) {
    		return true;
    	}
    	return false;
    }

    protected function validatoradmin(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mobile' => 'required|max:10',
            'landline' => 'required|max:11',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function validatorclerk(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mobile' => 'required|max:10',
            'landline' => 'required|max:11',
            'designation' => 'required|max:255',
            'id_dept' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function validatordean(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mobile' => 'required|max:10',
            'landline' => 'required|max:11',
            'designation' => 'required|max:255',
            'id_dept' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function validatorteacher(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mobile' => 'required|max:10',
            'landline' => 'required|max:11',
            'designation' => 'required|max:255',
            'specialization' => 'required|max:255',
            'id_dept' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'mobile' => $data['mobile'],
            'landline' => $data['landline'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'is_activated' => 1,
        ]);
    }

    protected function createadmin(array $data)
    {
        $user = $this->create($data);
        Admin::create(['id_user'=>$user['id'],]);
        return $user;
    }

    protected function createclerk(array $data)
    {
        $user = $this->create($data);
        Clerk::create([
            'id_user'=>$user['id'],
            'designation'=>$data['designation'],
            'id_dept'=>$data['id_dept'],
            ]);
        return $user;
    }

    protected function createdean(array $data)
    {
        $user = $this->create($data);
        Dean::create([
            'id_user'=>$user['id'],
            'designation'=>$data['designation'],
            'id_dept'=>$data['id_dept'],
            ]);
        return $user;
    }

    protected function createteacher(array $data)
    {
        $user = $this->create($data);
        Teacher::create([
            'id_user'=>$user['id'],
            'designation'=>$data['designation'],
            'specialization'=>$data['specialization'],
            'id_dept'=>$data['id_dept'],
            ]);
        return $user;
    }

    



    public function index() {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        return view('university.admin.index');
    }

    public function discrepanciesindex() {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        return view('university.admin.discrepancies.index');
    }

    public function usersindex() {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        return view('university.admin.users.index');
    }



    public function addadmin() {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        return view('university.admin.users.addadmin');
    }
    public function addadminpost(Request $request) {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        $input = $request->all();
        $validator = $this->validatoradmin($input);
        if ($validator->passes()){
            $user = $this->createadmin($input)->toArray();
            return back()->with('success',$user['fname'].' Created Sucessfully');
        }
        return back()->with('errors',$validator->errors());
    }


    public function addclerk() {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        return view('university.admin.users.addclerk');
    }
    public function addclerkpost(Request $request) {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        $input = $request->all();
        $validator = $this->validatorclerk($input);
        if ($validator->passes()){
            $user = $this->createclerk($input)->toArray();
            return back()->with('success', $user['fname'].' Created Sucessfully');
        }
        return back()->with('errors',$validator->errors());
    }


    public function adddean() {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        return view('university.admin.users.adddean');
    }
    public function adddeanpost(Request $request) {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        $input = $request->all();
        $validator = $this->validatordean($input);
        if ($validator->passes()){
            $user = $this->createdean($input)->toArray();
            return back()->with('success', $user['fname'].' Created Sucessfully');
        }
        return back()->with('errors',$validator->errors());
    }


    public function addteacher() {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        return view('university.admin.users.adddean');
    }
    public function addteacherpost(Request $request) {
        if($this->isNotAdmin()) {
            return Redirect::route('home');
        }
        $input = $request->all();
        $validator = $this->validatorteacher($input);
        if ($validator->passes()){
            $user = $this->createteacher($input)->toArray();
            return back()->with('success', $user['fname'].' Created Sucessfully');
        }
        return back()->with('errors',$validator->errors());
    }
}
