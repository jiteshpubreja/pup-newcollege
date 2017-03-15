<?php

namespace App\Http\Controllers;

use App\DiscrepancyCategory;
use App\DiscrepancyList;
use App\FeeStructure;
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




    public function adddiscrepancycategory() {
        if($this->isNotClerk()) {
            return Redirect::route('home');
        }
        $categories = DiscrepancyCategory::get()->toArray();
        return view('university.clerk.discrepancies.addcategory',compact('categories'));
    }
    public function adddiscrepancycategorypost(Request $request) {
        if($this->isNotClerk()) {
            return Redirect::route('home');
        }
        $category = (new DiscrepancyCategory)->addcategory($request->all());
        if(isset($category->id)){
            return back()->with('success', $category->name.' Created Sucessfully as Discrepancy Category');
        }
        else{
            return back()->with('errors',$category);
        }
    }




    public function adddiscrepancylist() {
        if($this->isNotClerk()) {
            return Redirect::route('home');
        }
        $categories = DiscrepancyCategory::get();
        $lists = DiscrepancyList::get();
        return view('university.clerk.discrepancies.add',compact('categories','lists'));
    }
    public function adddiscrepancylistpost(Request $request) {
        if($this->isNotClerk()) {
            return Redirect::route('home');
        }
        $list = (new DiscrepancyList)->adddiscrepancy($request->all());
        if(isset($list->id)){
            return back()->with('success', $list->name.' Created Sucessfully as Discrepancy');
        }
        else{
            return back()->with('errors',$list);
        }
    }




    public function addfeestructure() {
        if($this->isNotClerk()) {
            return Redirect::route('home');
        }
        $structure = FeeStructure::get();
        return view('university.clerk.fees.addstructure',compact('structure'));
    }
    public function addfeestructurepost(Request $request) {
        if($this->isNotClerk()) {
            return Redirect::route('home');
        }
        $list = (new FeeStructure)->addfeestructure($request->all());
        if(isset($list->id)){
            return back()->with('success', $list->name.' Created Sucessfully as Fee Structure');
        }
        else{
            return back()->with('errors',$list);
        }
    }


}
