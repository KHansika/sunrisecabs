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

Route::get('/','PagesController@welcome');
Route::get('/about','PagesController@about');
Route::get('/cars','PagesController@cars');
Route::get('/contact','PagesController@contact');
Route::get('/services','PagesController@services');
Route::get('/team','PagesController@team');
Route::get('/vehicleselect','PagesController@vehicleselect');
Route::get('/sent','PagesController@vehiclesent');
Route::get('/update/{id}','UpdateController@update');
Route::get('/neworders','AdminpagesController@viewit');
Route::get('/sentvehicles','SentvehiclesController@index');
Route::get('/adminlogin','AdminpagesController@adminlogin')->middleware('auth');

 Route::resource('booking','BookingsController');

 Route::get('/vehicles','VehiclesController@index');
 Route::get('/addvehicles','VehiclesController@addvehicle');

 Route::get('/vehicleowners','VehicleownersController@index');
 Route::get('/addvehicleowners','VehicleownersController@addvehicleowners');

 Route::POST('/addvehicleowners',['uses'=>'VehicleownersController@tostore']);
 Route::POST('/addvehicles',['uses'=>'VehiclesController@tostore']);



 Route::get('/login','AdminpagesController@login');



//  Route::resource('vehicleowners','VehicleownersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
