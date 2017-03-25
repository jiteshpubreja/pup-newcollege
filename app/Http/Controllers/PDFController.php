<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\PDFGenerator;

class PDFController extends Controller
{


	use PDFGenerator;

	public function index($user){

		$model = "App\\".$user;

		$users = $model::get()->toArray();
		$keys = array_diff((new $model)->getFillable(), (new $model)->getHidden());

		if($users)
		{
			$this->getPDF(view('temp',compact('users','keys')));
		}
		else
		{
			$this->getPDF("Nothing to Display");
		}

	}

	public function requestdd(Request $request) {
		dd($request);
	}
}
