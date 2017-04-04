<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Clerk;
use App\College;
use App\Dean;
use App\DiscrepancyCategory;
use App\Teacher;
use App\Traits\PDFGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class RedirectController extends Controller
{

    use PDFGenerator;



    public function redirect() {
        $user = Auth::user();
        if($user) {
            if($user->isAdmin()){
                return Redirect::route('adminhome');
            }
            if($user->isClerk()){
                return Redirect::route('clerkhome');
            }
            if($user->isCollege()){
                return Redirect::route('collegehome');
            }
            if($user->isDean()){
                return Redirect::route('deanhome');
            }
            if($user->isTeacher()){
                return Redirect::route('teacherhome');
            }
        }
        else {
            return view('index');
        }
    }



    public function test() {

        $page="LEGAL";
        $letterexists=false;
        $font="raavi";
        $title="Testing With Raavi";
        $this->getPDF(view('temp')->render(),$letterexists,$font,$page,$title);

    }
}
