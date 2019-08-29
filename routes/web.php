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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
Route::get('user/{user}/delete', 'UserController@delete')->name('user.delete');

Route::prefix('fleet')->name('fleet.')->group(function () {
    // types
    Route::resource('type', 'VehicleTypeController');
    Route::get('type/{type}/delete', 'VehicleTypeController@delete')->name('type.delete');

    // makes
    Route::resource('make', 'VehicleMakeController');
    Route::get('make/{make}/delete', 'VehicleMakeController@delete')->name('make.delete');

    // models
    Route::resource('model', 'VehicleModelController');
    Route::get('model/{model}/delete', 'VehicleModelController@delete')->name('model.delete');

    // vehicles
    Route::resource('vehicle', 'VehicleController');
    Route::get('vehicle/{vehicle}/delete', 'VehicleController@delete')->name('vehicle.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
