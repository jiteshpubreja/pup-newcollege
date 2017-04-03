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
    
    public function download($refid,$filename) {
        $file = public_path().'/uploads/'.$refid.'/'.$filename;
        if(file_exists($file)){
            $fileinfo = pathinfo($file);
            $filename = $fileinfo['basename'];
            $headers = array(
                'Content-Type: application/pdf',
                "Content-Disposition: attachment; filename=\"$filename\"",
                'Content-Length: ' . filesize($file),
                );
            return response()->file($file, $headers);
        }
        else
            return abort(404);
    }
}
