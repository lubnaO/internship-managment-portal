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

<<<<<<< HEAD

=======
//Route::get('/', function () {
  // return view('finalEvalutions.create');

//});
>>>>>>> db25e64df92998d053ffc8e4e6d013616931a0eb

Route::get('/Cdashboard', function () {
  return view('Cdashboard');

<<<<<<< HEAD
});
=======
//});

Route::get('/', function () {
  return view('indexhome');



});

Route::get('finalEvalutions/index','finalEvalutionController@index');


>>>>>>> db25e64df92998d053ffc8e4e6d013616931a0eb
//Route::get('/annou', function () {
  //  return view('annou');
//});

<<<<<<< HEAD
Route::get('/dashboardtwo', function () {
    return view('dashboardtwo');
});
=======
//Route::get('/dashboardtwo', function () {
   //return view('dashboardtwo');
//});
>>>>>>> db25e64df92998d053ffc8e4e6d013616931a0eb

Route::resource('/Announcaments','AnnouncamentsController');
Route::resource('/CV','CVCotroller');

Route::resource('/company','CompanyFormController');
Route::resource('/applicnt','ApplicntCntroller');





Route::resource('/finalreports','finalReportController');
Route::resource('/medEvalutions','medEvalutionController');
Route::resource('/finalEvalutions','finalEvalutionController');
Route::resource('/TrainingRegistrations','TrainingRegistrationController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


<<<<<<< HEAD
Route::get('/', function () {
    return view('indexhome');
});
=======


//Route::get('/', function () {
   // return view('indexhome');
//});
>>>>>>> db25e64df92998d053ffc8e4e6d013616931a0eb


//Route::get('/', function () {
    //return view('indexhome');

