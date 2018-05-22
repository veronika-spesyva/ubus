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

Route::get('/', 'HomeController@index');
Route::get('/pronas', 'HomeController@about');
Route::get('/routes', 'HomeController@routes') -> name('trip.all');
Route::get('/routes/{slug}', 'HomeController@show') -> name('trip.show');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function(){
    Route::get('/','DashboardController@index');
    Route::resource('/cities', 'CitiesController');
    Route::resource('/price', 'PricesController');
    Route::resource('/trips', 'TripsController');
});


// Route::get('/admin', 'Admin\DashboardController@index');