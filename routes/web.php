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
   return view('Cdashboard');

});

Route::get('', function () {
  return view('dashboardtwo');
});



Route::get('', function () {
return view('Sdashboard');

});

Route::get('finalEvalutions/index','finalEvalutionController@index');   //route to convert from Sdashbaord final evalution o index in final evalution 
Route::get('medEvalutions/index','medEvalutionController@index');
Route::get('finalreports/index','finalReportController@index');


Route::get('finalEvalutions/index','finalEvalutionController@index');
Route::get('finalEvalutions/{id}','finalEvalutionController@show');

Route::get('/finalEvalutions/{finalEvalution}','finalEvalutionController@show');

Route::get('/finalreports/{finalReport}','finalReportController@show');


//Route::get('/finalEvalutions/{finalEvalution}','finalEvalutionController@show');
//Route::get('/finalreports/{finalReport}','finalReportController@show');

//Route::get('finalEvalutions/index','finalEvalutionController@index');
//Route::get('finalEvalutions/{id}','finalEvalutionController@show');





//Route::get('/annou', function () {
  //  return view('annou');
//});

Route::get('/dashboardtwo', function () {
    return view('dashboardtwo');
});

//Route::get('/dashboardtwo', function () {
   //return view('dashboardtwo');
//});

Route::resource('/Announcaments','AnnouncamentsController');
Route::resource('/record','recordController');

Route::resource('/CV','CVCotroller');

Route::resource('/company','CompanyFormController');
Route::resource('/applicnt','ApplicntCntroller');





Route::resource('/finalreports','finalReportController');
Route::resource('/medEvalutions','medEvalutionController');
Route::resource('/finalEvalutions','finalEvalutionController');
Route::resource('/TrainingRegistrations','TrainingRegistrationController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/company/{id}','CompanyFormController@show');

Route::get('/', function () {
    return view('indexhome');
}); 


//Route::get('/', function () {
   // return view('indexhome');
//});


//Route::get('/', function () {
    //return view('indexhome');

