<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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





    public function index() {
    	if($this->isNotTeacher()) {
    		return Redirect::route('home');
    	}
    	return view('university.teacher.index');
    }
}
