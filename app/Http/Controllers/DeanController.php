<?php

namespace App\Http\Controllers;

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
}
