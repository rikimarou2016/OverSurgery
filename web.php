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

Route::get('home','PagesController@gethome' );

Route::get('StaffChangeAppointment', 'PagesController@getStaffChangeAppointment');
Route::get('StaffBookAppointment','PagesController@getStaffBookAppointment');
Route::get('StaffGiveTestResult','PagesController@getStaffGiveTestresult');


Route::get('StaffCancelAppointment','StaffmemberController@edit');


Route::post('StaffGiveTestResult/create', 'TestController@store');

Route::get('StaffGiveTestResult', function()
{
    return View::make('Pages/StaffGiveTestResult');
});



Route::get('CheckTest', 'PatientController@edit');




Route::get('patientDashboard','PagesController@getPatientDashboard');

Route::get('StaffCheckAppointment/', 'StaffmemberController@index');
Route::get('StaffCheckAppointment/Today', 'StaffmemberController@Today');
Route::get('StaffCheckAppointment/May2018', 'StaffmemberController@May2018');
Route::get('StaffCheckAppointment/June2018', 'StaffmemberController@June2018');
Route::get('StaffCheckAppointment/July2018', 'StaffmemberController@July2018');
Route::get('StaffCheckAppointment/August2018', 'StaffmemberController@August2018');
Route::get('StaffCheckAppointment/September2018', 'StaffmemberController@September2018');
Route::get('StaffCheckAppointment/October2018', 'StaffmemberController@October2018');
Route::get('StaffCheckAppointment/November2018', 'StaffmemberController@November2018');
Route::get('StaffCheckAppointment/December2018', 'StaffmemberController@December2018');


Route::get('PatientDashboard', 'PatientController@edit');
Route::get('StaffDashboard', 'pagesController@getStaffDashboard');


//route to access the function test result
Route::get('Test ', 'PatientController@edit');


Route::get('CheckSpecificStaff', 'pagesController@getCheckSpecificStaff');
Route::get('CheckAllStaff', 'pagesController@getCheckAllStaff');

Route::get('Test','pagesController@getTest');



//route used to show specific staff members rota
Route::get('CheckSpecificStaff/','PatientController@show');
Route::get('CheckSpecificStaff/showWatson','PatientController@showWatson');
Route::get('CheckSpecificStaff/showTaylor','PatientController@showTaylor');
Route::get('CheckSpecificStaff/showCole','PatientController@showCole');
Route::get('CheckSpecificStaff/showThomson','PatientController@showthomson');



Route::get('BookAppointment', 'pagesController@getBookAppointment');
Route::get('PatientDashboard', 'PagesController@getPatientDashboard');
Route::get('Registration', 'PagesController@getRegistration');
Route::get('home','PagesController@gethome');
Route::get('/','PagesController@getwelcome');

Route::get('StaffDeleteAppointment/{refNumber}', 'StaffmemberController@destroy');




Route::resource('patients', 'PatientController');
Route::resource('appointments', 'AppointmentController');
Route::resource('Staffmember', 'StaffmemberController');
Route::resource('tests', 'TestController');


Route::post('/loginme','LoginController@login');

