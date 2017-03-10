<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Clerk;
use App\College;
use App\Dean;
use App\DepartmentTeacher;
use App\Discrepancy;
use App\Inspection;
use App\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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


        dd($users);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
