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

	Route::get('/', 'RedirectController@redirect')->name('home');

	Route::get('/controller', function () {
		return view('administration.clerk');
	})->name('clerk');

	Route::get('/aboutus', 'PagesController@aboutUs')->name('aboutus');

	Route::get('/contactus', 'PagesController@contactUs')->name('contactus');

	Auth::routes();
	Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation')->name('activation');

	Route::get('/home', 'HomeController@index');
	Route::get('/pdf', 'PDFController@index');

});



Route::Group(['prefix' => 'admin'],function(){
	Route::get('/', 'AdminController@index')->name('adminhome');
	
	Route::Group(['prefix' => 'departments'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/addclerk', 'AdminController@adddepartmentclerk');
		Route::post('/addclerk', 'AdminController@adddepartmentclerkpost')->name('addclerkdept');
		Route::get('/adddean', 'AdminController@adddepartmentdean');
		Route::post('/adddean', 'AdminController@adddepartmentdeanpost')->name('adddeandept');
		Route::get('/addteacher', 'AdminController@adddepartmentteacher');
		Route::post('/addteacher', 'AdminController@adddepartmentteacherpost')->name('addteacherdept');
	});
	
	Route::Group(['prefix' => 'users'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/addadmin', 'AdminController@addadmin');
		Route::post('/addadmin', 'AdminController@addadminpost')->name('addadmin');
		Route::get('/addclerk', 'AdminController@addclerk');
		Route::post('/addclerk', 'AdminController@addclerkpost')->name('addclerk');
		Route::get('/adddean', 'AdminController@adddean');
		Route::post('/adddean', 'AdminController@adddeanpost')->name('adddean');
		Route::get('/addteacher', 'AdminController@addteacher');
		Route::post('/addteacher', 'AdminController@addteacherpost')->name('addteacher');
	});
});



Route::Group(['prefix' => 'clerk'],function(){
	Route::get('/', 'ClerkController@index')->name('clerkhome');

	Route::Group(['prefix' => 'discrepancies'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/add', 'ClerkController@adddiscrepancylist');
		Route::post('/add', 'ClerkController@adddiscrepancylistpost')->name('adddiscrepancylist');
		Route::get('/addcategory', 'ClerkController@adddiscrepancycategory');
		Route::post('/addcategory', 'ClerkController@adddiscrepancycategorypost')->name('adddiscrepancycategory');
	});
});



Route::Group(['prefix' => 'college'],function(){
	Route::get('/', 'CollegeController@index')->name('collegehome');
});



Route::Group(['prefix' => 'dean'],function(){
	Route::get('/', 'DeanController@index')->name('deanhome');
});



Route::Group(['prefix' => 'teacher'],function(){
	Route::get('/', 'TeacherController@index')->name('teacherhome');
	Route::get('/addinspection', 'TeacherController@addinspection');
	Route::post('/addinspection', 'TeacherController@addinspectionpost')->name('teacheraddinspection');
});




Route::Group(['middleware' => ['auth']],function(){
Route::get('/5000', function () {
		return view('forms.5000');
	})->name('5000');

Route::post('/handleUpload', 'HomeController@upload')->name('uploadfiles');

Route::get('/AdminSignup', function () {
		return view('auth.admin');
	})->name('adminsignup');

Route::get('/draft', function () {
		return view('draft');
	})->name('adminsignup');

Route::get('/file', function () {
		return view('files_uploading');
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
