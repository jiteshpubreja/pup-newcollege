<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Clerk;
use App\College;
use App\CollegeNewRegistration;
use App\CollegeUploadedFile;
use App\Dean;
use App\DepartmentClerk;
use App\DepartmentTeacher;
use App\Discrepancy;
use App\Inspection;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function d__construct()
    {   




        $department = (new DepartmentClerk)->adddepartment(['name'=>'Tester']);
        $status = "undefined";
        if(isset($department->id)){
            $status=$department;
        }
        else{
            $status="failure";
        }

        // dd($status);
        $inspections = Inspection::get();
        foreach ($inspections as $inspection) {
            echo $inspection;
            echo '<br />';
            echo $inspection->id;
            echo '<br />';
            echo $inspection->id_college;
            echo '<br />';
            echo $inspection->id_teacher;
            echo '<br />';
            echo $inspection->final_remarks;
            echo '<br />';
            echo '<br />';
            echo '<br />';
            foreach ($inspection->discrepancies as $discrepancy) {
                echo $discrepancy->listname->name;
                echo ' <strong>from</strong> ';
                echo $discrepancy->listname->category->name;
                echo ' <strong>is</strong> ';
                echo $discrepancy->is_discrepancy;
                echo '<br />';
                echo $discrepancy->remarks;
                echo '<br />';
                echo '<br />';
            }
            echo '<br />';
            echo '<br />';
            echo '<br />';
        }
        // dd($inspection);


        $users = DepartmentTeacher::get();
        foreach ($users as $user) {
            echo $user;
            echo '<br />';
            echo $user->id;
            echo '<br />';
            echo $user->name;
            echo '<br />';
            echo $user->description;
            echo '<br />';
        }


        $users = Admin::get();
        foreach ($users as $user) {
            echo $user;
            echo '<br />';
            echo $user->user;
            echo '<br />';
        }
        $users = Dean::get();
        foreach ($users as $user) {
            echo $user;
            echo '<br />';
            echo $user->user;
            echo '<br />';
        }
        $users = Clerk::get();
        foreach ($users as $user) {
            echo $user;
            echo '<br />';
            echo $user->user;
            echo '<br />';
        }
        $users = Teacher::get();
        foreach ($users as $user) {
            echo $user;
            echo '<br />';
            echo $user->user;
            echo '<br />';
        }
        $users = College::get();
        foreach ($users as $user) {
            echo $user;
            echo '<br />';
            echo $user->user;
            echo '<br />';
        }

        $inspections = Discrepancy::get();
        foreach ($inspections as $inspection) {
            echo $inspection;
            echo '<br />';
            echo $inspection->discrepancies;
            echo '<br />';
            echo $inspection->inspection;
            echo '<br />';
        }


        // dd($users);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('temp')->with('colleges',College::get());
    }


    public function upload(Request $request)
    {
        $refid = "PUP".mt_rand(1000000, 9999999);
        // dd($refid);
        // dd($request->file('file1'));
        for ($i=1; $i <= 6; $i++) { 
            if($request->hasFile('file'.$i)) {
            $file = $request->file('file'.$i);
            $name = 'file'.$i.'.'.$file->getClientOriginalExtension();
            $destination = 'uploads/'.$refid.'/';
            $file->move($destination,$name);
            dd($destination.$name);
        }
        }

        return back();
    }
}
