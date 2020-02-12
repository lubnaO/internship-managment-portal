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
    return view('Sdashboard');

});
//Route::get('/annou', function () {
  //  return view('annou');
//});

Route::resource('/Announcaments','AnnouncamentsController');
Route::resource('/company','CompanyFormController');
Route::get('upload', 'FrontController@upload');
Route::get('annou', 'FrontController@annou'); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/', function () {
   // return view('indexhome');
//});


//Route::get('/', function () {
    //return view('indexhome');

