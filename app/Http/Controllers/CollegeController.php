<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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





    public function index() {
        if($this->isNotCollege()) {
            return Redirect::route('home');
        }
        return view('university.college.index');
    }
}
