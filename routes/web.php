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

Route::get('/', function () {
    return view('dashboardtwo');

});
//Route::get('/', function () {
 // return view('finalreports.create');

//});
//Route::get('/annou', function () {
  //  return view('annou');
//});

Route::resource('/Announcaments','AnnouncamentsController');
Route::resource('/company','CompanyFormController');
Route::resource('/finalreports','finalReportController');
Route::resource('/finalEvalutions','finalEvalutionController');



Route::resource('/finalreports','finalReportController');
Route::resource('/medEvalutions','medEvalutionController');
Route::resource('/finalEvalutions','finalEvalutionController');
Route::resource('/TrainingRegistrations','TrainingRegistrationController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/', function () {
   // return view('indexhome');
//});


//Route::get('/', function () {
    //return view('indexhome');

