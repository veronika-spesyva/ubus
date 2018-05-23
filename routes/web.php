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
<<<<<<< HEAD
Route::get('/napryami', 'HomeController@routes');
Route::get('/napryami/{slug}', 'HomeController@show') -> name('trip.show');
Route::get('/poslugi', 'HomeController@services');
Route::get('/kontakti', 'HomeController@contacts');

=======
Route::get('/routes', 'HomeController@routes') -> name('trip.all');
Route::get('/routes/{slug}', 'HomeController@show') -> name('trip.show');
Route::view('/pay', 'pages.pay')->name('trip.pay');
>>>>>>> e814375bb1a467b40bcfd38ed9ce9830254c2210

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function(){
    Route::get('/','DashboardController@index');
    Route::resource('/cities', 'CitiesController');
    Route::resource('/price', 'PricesController');
    Route::resource('/trips', 'TripsController');
});


// Route::get('/admin', 'Admin\DashboardController@index');