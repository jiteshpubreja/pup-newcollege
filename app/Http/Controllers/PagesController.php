<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUs() {
    	
    	return redirect()->intended(route('introduction'));

    }
    public function introduction() {
    	
    	return view('introduction');

    }
    public function infrastructure() {
    	
    	return view('infrastructure');

    }
    public function agrade() {
    	
    	return view('agrade');

    }
    public function publication() {
    	
    	return view('publication');

    }
    public function museum() {
    	
    	return view('museum');

    }
    public function library() {
    	
    	return view('library');

    }

    public function applynewcollege() {
        
        return view('applynewcollege');

    }
    


    public function contactUs() {
    	
    	return view('contact');

    }
}
