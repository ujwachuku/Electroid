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
    Route::resource('type', 'VehicleTypeController');
    Route::get('type/{type}/delete', 'VehicleTypeController@delete')->name('type.delete');
    Route::resource('make', 'VehicleMakeController');
    Route::resource('model', 'VehicleModelController');
    Route::resource('vehicle', 'VehicleController');
});
