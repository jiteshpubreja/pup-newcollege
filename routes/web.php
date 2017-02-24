<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::Group(['middleware' => ['web']],function(){

	Route::get('/', function () {
		return view('index');
	})->name('home');

	Route::get('/aboutus', function () {
		return view('about');
	})->name('aboutus');

	Route::get('/contactus', function () {
		return view('contact');
	})->name('contactus');

	Auth::routes();

	Route::get('/home', 'HomeController@index');

});


Route::Group(['middleware' => ['auth']],function(){
Route::get('/5000', function () {
		return view('forms.5000');
	})->name('5000');
	

Route::get('/AdminSignup', function () {
		return view('auth.admin');
	})->name('adminsignup');

Route::get('/descrepencies', function () {
		return view('forms.descrepencies');
	})->name('descrepencies');

Route::get('/headselection', function () {
		return view('forms.headselection');
	})->name('headselection');

Route::get('/inspectionform', function () {
		return view('forms.inspectionform');
	})->name('inspectionform');

Route::get('/teamselection', function () {
		return view('forms.teamselection');
	})->name('teamselection');


});


