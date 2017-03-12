<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ClerkController extends Controller
{
    
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
}
