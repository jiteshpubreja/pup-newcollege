<?php

namespace App\Http\Controllers;

use App\College;
use App\DiscrepancyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

    protected function validatorinspection(array $data)
    {
        return Validator::make($data, [
            'finalremarks' => 'required',
        ]);
    }





    public function index() {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }
        return view('university.teacher.index');
    }

    public function addinspection() {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }

        $categories = DiscrepancyCategory::get();
        $collegeid = College::first()->id;
        return view('university.teacher.addinspection',compact('categories'))->with('collegeid',$collegeid);
    }

    public function addinspectionpost(Request $request) {
        if($this->isNotTeacher()) {
            return Redirect::route('home');
        }


        dd($request->all());

        $categories = DiscrepancyCategory::get();
        $input = $request->all();
        $validator = $this->validatorinspection($input);
        if ($validator->passes()){





            $user = $this->createadmin($input)->toArray();
            return back()->with('success',$user['fname'].' Created Sucessfully as Admin');
        }
        return back()->with('errors',$validator->errors());


        return view('university.teacher.addinspection',compact('categories'));
    }
}
