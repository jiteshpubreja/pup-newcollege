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

	Route::Group(['prefix' => 'aboutus'],function(){
		Route::get('/', 'PagesController@aboutus')->name('aboutus');
		Route::get('/introduction', 'PagesController@introduction')->name('introduction');
		Route::get('/infrastructure', 'PagesController@infrastructure')->name('infrastructure');
		Route::get('/agrade', 'PagesController@agrade')->name('agrade');
		Route::get('/publication', 'PagesController@publication')->name('publication');
		Route::get('/museum', 'PagesController@museum')->name('museum');
		Route::get('/library', 'PagesController@library')->name('library');
		Route::get('/applynewcollege', 'PagesController@applynewcollege')->name('applynewcollege');
	});

	Route::get('/contactus', 'PagesController@contactUs')->name('contactus');

	Auth::routes();
	Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation')->name('activation');
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

	Route::Group(['prefix' => 'fees'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/addfeestructure', 'ClerkController@addfeestructure');
		Route::post('/addfeestructure', 'ClerkController@addfeestructurepost')->name('addfeestructure');
	});

	Route::Group(['prefix' => 'inspections'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/viewinspection/{inspectionid?}', 'ClerkController@viewinspection')->name('clerkviewinspection');
		Route::get('/viewinspection/{inspectionid?}/pdf', 'ClerkController@viewinspectionpdf')->name('clerkviewinspectionpdf');
		Route::put('/viewinspection/{inspectionid?}', 'ClerkController@forwardinspection')->name('clerkviewinspection');
		Route::get('/request', 'ClerkController@clerkviewrequest')->name('clerkviewrequest');
		Route::put('/request/{requestid?}', 'ClerkController@clerkforwardrequest')->name('clerkforwardrequest');
		Route::put('/request/{requestid?}/reject', 'ClerkController@clerkrejectrequest')->name('clerkrejectrequest');
	});

	Route::Group(['prefix' => 'applications'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/view/{collegeid?}', 'ClerkController@viewapplication')->name('clerkviewapplication');
		Route::get('/rejected/view/{collegeid?}', 'ClerkController@viewapplicationrejects')->name('clerkviewapplicationrejects');
		Route::get('/view/{collegeid?}/docs', 'ClerkController@viewappdocs')->name('clerkviewappdocs');
		Route::get('/view/{collegeid?}/pdf', 'ClerkController@viewapplicationpdf')->name('clerkviewapplicationpdf');
		Route::put('/view/{collegeid?}', 'ClerkController@forwardapplication')->name('clerkviewapplication');
		Route::put('/view/{collegeid?}/reject', 'ClerkController@rejectapplication')->name('clerkrejectapplication');
		Route::get('/view/{collegeid?}/drafts', 'ClerkController@viewdrafts')->name('clerkviewdrafts');
		Route::get('/view/{draftid?}/drafts/approve', 'ClerkController@approvedrafts')->name('clerkapprovedrafts');
	});

	Route::Group(['prefix' => 'drafts'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/view', 'ClerkController@viewalldrafts')->name('clerkviewalldrafts');
		Route::get('/view/{draftid?}/drafts/approve', 'ClerkController@approvedrafts')->name('clerkapprovedrafts');
	});
});



Route::Group(['prefix' => 'college'],function(){
	Route::get('/', 'CollegeController@index')->name('collegehome');
	Route::get('/rejected/{applicationid?}', 'CollegeController@viewrejectedapplications')->name('collegeviewrejected');
	Route::get('/apply', 'CollegeController@applynewcollege');
	Route::post('/apply', 'CollegeController@applynewcollegepost')->name('collegenewapply');
	Route::put('/apply', 'CollegeController@applynewcollegeput');
	Route::put('/apply/submit', 'CollegeController@applynewcollegesubmitput')->name('collegenewapplysubmit');
	Route::get('/upload', 'CollegeController@uploadsupportingdocs');
	Route::post('/upload', 'CollegeController@uploadsupportingdocspost')->name('collegeuploaddocs');
	Route::get('/draft/upload', 'CollegeController@uploaddraft');
	Route::post('/draft/upload', 'CollegeController@uploaddraftpost')->name('collegeuploaddraft');
	Route::get('/inspection/request', 'CollegeController@requestinspection');
	Route::post('/inspection/request', 'CollegeController@requestinspectionpost')->name('collegerequestinspection');

	Route::Group(['prefix' => 'downloads'],function(){
		Route::get('/', 'CollegeController@downloads')->name('collegedownloads');
		Route::get('/inspectionletter', 'CollegeController@scheduledinspectionletter')->name('scheduledinspectionletter');
		Route::get('/applicationform/pdf', 'CollegeController@viewapplicationpdf')->name('collegeviewapplicationpdf');
	});

});



Route::Group(['prefix' => 'dean'],function(){
	Route::get('/', 'DeanController@index')->name('deanhome');

	Route::Group(['prefix' => 'drafts'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/view', 'DeanController@viewdrafts')->name('deanviewdrafts');
	});

	Route::Group(['prefix' => 'applications'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/view/{collegeid?}', 'DeanController@viewapplication')->name('deanviewapplication');
		Route::get('/view/{collegeid?}/docs', 'DeanController@viewappdocs')->name('deanviewappdocs');
		Route::get('/view/{collegeid?}/pdf', 'DeanController@viewapplicationpdf')->name('deanviewapplicationpdf');
		Route::put('/view/{collegeid?}', 'DeanController@generateloi')->name('deanviewapplication');
	});

	Route::Group(['prefix' => 'inspections'],function(){
		Route::get('/', 'RedirectController@redirect');
		Route::get('/viewinspection/{inspectionid?}', 'DeanController@viewinspection')->name('deanviewinspection');
		Route::get('/viewinspection/{inspectionid?}/pdf', 'DeanController@viewinspectionpdf')->name('deanviewinspectionpdf');
		Route::put('/viewinspection/{inspectionid?}', 'DeanController@approveinspection')->name('deanviewinspection');
		Route::get('/request', 'DeanController@deanviewrequest')->name('deanviewrequest');
		Route::get('/request/{requestid?}/convener', 'DeanController@deanassignconvener')->name('deanassignconvener');
		Route::post('/request/{requestid?}/convener', 'DeanController@deanassignconvenerpost')->name('deanassignconvener');
		Route::get('/request/{requestid?}/members', 'DeanController@deanassignmembers')->name('deanassignmembers');
		Route::post('/request/{requestid?}/members', 'DeanController@deanassignmemberspost')->name('deanassignmembers');
	});
});



Route::Group(['prefix' => 'teacher'],function(){
	Route::get('/', 'TeacherController@index')->name('teacherhome');
	Route::get('/scheduleinspection', 'TeacherController@scheduleinspection');
	Route::post('/scheduleinspection', 'TeacherController@scheduleinspectionpost')->name('teacherscheduleinspection');
	Route::get('/addinspection', 'TeacherController@addinspection');
	Route::post('/addinspection', 'TeacherController@addinspectionpost')->name('teacheraddinspection');
	Route::get('/viewinspection/{inspectionid?}', 'TeacherController@viewinspection')->name('teacherviewinspection');
	Route::get('/viewinspection/{inspectionid?}/pdf', 'TeacherController@viewinspectionpdf')->name('teacherviewinspectionpdf');
});




Route::Group(['middleware' => ['auth']],function(){
	Route::get('/download/{refid}/{filename}', 'PDFController@download')->name('collegedownload');
});
