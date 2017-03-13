<?php

namespace App\Http\Controllers;

use App\College;
use App\Discrepancy;
use App\DiscrepancyCategory;
use App\Inspection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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
        $input = $request->all();
        $validator = $this->validatorinspection($input);
        if ($validator->passes()){
            $inspection = Inspection::create([
                'id_college' => $input['collegeid'],
                'id_teacher' => Auth::user()->isTeacher()->id,
                'final_remarks' => $input['finalremarks'],
                ]);

            for ($i=1; $i <= $input['count']; $i++) { 
                Discrepancy::create([
                    'id_discrepancy_list' => $input['discrepancyid'.$i],
                    'id_college' => $input['collegeid'],
                    'is_discrepancy' => $input['isdiscrepancy'.$i],
                    'remarks' => $input['remarks'.$i],
                    'id_inspection' => $inspection['id'],
                    ]);
            }

            return back()->with('success','Inspection Submitted Sucessfully');
        }
        return back()->with('errors',$validator->errors());
    }
}
