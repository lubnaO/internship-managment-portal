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

//Route::get('/', function () {
  
//$studet = Student::find(1);
//Student::find(1)->notify(new Reply);

//return view('home');

//});

Route::get('/', function () {
   return view('indexhome');

});

//Route::get('', function () {
  //return view('dashboardtwo');
//});



//Route::get('', function () {
//return view('Sdashboard');

//});

//Route::get('/', function () {
 // return view('Sdashboard');


//Route::get('', function () {
//return view('Sdashboard');

//});
Route::get('finalEvalutions/index','finalEvalutionController@index');   //route to convert from Sdashbaord final evalution o index in final evalution 
Route::get('medEvalutions/index','medEvalutionController@index');
Route::get('finalreports/index','finalReportController@index');


Route::get('finalEvalutions/index','finalEvalutionController@index');
Route::get('finalEvalutions/{id}','finalEvalutionController@show');
Route::get('finalEvalutions/index','finalEvalutionController@index');



//Route::get('/finalEvalutions/{finalEvalution}','finalEvalutionController@show');
//Route::get('/finalreports/{finalReport}','finalReportController@show');

//Route::get('finalEvalutions/index','finalEvalutionController@index');
//Route::get('finalEvalutions/{id}','finalEvalutionController@show');




//Route::get('/annou', function () {
  //  return view('annou');
//});


//Route::get('/dashboardtwo', function () {
   // return view('dashboardtwo');
//});

Route::get('/dashboardtwo', function () {
    return view('dashboardtwo');
});
Route::get('/request', function () {
  return view('request');
});
Route::get('/studentregister', function () {
  return view('student');
});
Route::get('/uni', function () {
  return view('uni');
});


Route::resource('/Announcaments','AnnouncamentsController');
Route::resource('/record','recordController');

Route::resource('/CV','CVCotroller');

Route::resource('/company','CompanyFormController');
Route::resource('/applicnt','ApplicntCntroller');
Route::resource('/status','statusController');








Route::resource('/finalreports','finalReportController');
Route::resource('/medEvalutions','medEvalutionController');
Route::resource('/finalEvalutions','finalEvalutionController');
Route::resource('/TrainingRegistrations','TrainingRegistrationController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profiles/{id}','CompanyFormController@show');



Route::get('/', function () {
    return view('indexhome');
}); 

//Route::get('/', function () {
  //  return view('indexhome');
//});


Route::get('/', 'indexhomeController@index');
Route::get('/tregis', 'TrainingRegistrationController@indo');
Route::get('/studentlist', 'statusController@studentlist');
Route::get('/studentlist', 'statusController@studentlist');
Route::resource('/garde','gradeController');

Route::get('TrainingRegistrations/{id}','TrainingRegistrationController@show');




 
Route::get('finalEvalutions/{id}','finalEvalutionController@show');



Route::get('/finalEvalutions/{finalEvalution}','finalEvalutionController@show');

Route::get('/finalreports/{finalReport}','finalReportController@show');


Route::resource('/student','studentController');
Route::post('/student/{id}','studentController@update');
Route::post('/student/{id}/edit','studentController@edit');





//Route::get('/', function () {
    //return view('indexhome');
