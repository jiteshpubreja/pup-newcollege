<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Clerk;
use App\College;
use App\Dean;
use App\DiscrepancyCategory;
use App\DiscrepancyList;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

class RedirectController extends Controller
{

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

    public function initialize(){

        echo 'Install Manager : Begin of installation<br>';
        $Migrations = Config::get('database.migrations', 'migrations');

        if (Schema::hasTable($Migrations))
        {
            if(DiscrepancyList::get()->count()){
                echo 'Install Manager = Already installed!<br>';
            }
            else {
                echo 'Install Manager : We have migrations, so just do DB seeding.<br>';
                Artisan::call('db:seed', ['--force'=> true]);
                echo 'Install Manager = All Done!<br>';   
            }
        }
        else
        {
            echo 'Install Manager : running migrate:install<br>';
            Artisan::call('migrate:install');
            echo 'Install Manager = Done!<br>';
            echo 'Install Manager : Start of migrating<br>';
            Artisan::call('migrate', ['--force'=> true]);
            echo 'Install Manager = Done!<br>';
            echo 'Install Manager : Start of DB seeding<br>';
            Artisan::call('db:seed', ['--force'=> true]);
            echo 'Install Manager = All Done!<br>';
        }
        return Response::make("All installed!", 200);
    } 
}
