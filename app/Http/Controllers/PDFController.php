<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function index(){
    	$users = User::get()->toArray();
    	$keys = array_diff((new User)->getFillable(), (new User)->getHidden());
    	if($users){
    		
    		// foreach ($keys as $key) {
    		// 	echo $key;
    		// 	echo '<br />';
    		// }
    		// foreach ($users as $user) {
    		// 	foreach ($keys as $key) {
    		// 	echo $user[$key];
    		// 	echo '<br />';
    		// 	}
    		// }

    		return view('temp',compact('users','keys'));
    	}
    	dd($users->toArray());
    	dd((new User)->getFillable());
    }
}
