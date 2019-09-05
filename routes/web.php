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

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');

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

    Route::prefix('service')->name('service.')->group(function () {
        // teams
        Route::resource('team', 'ServiceTeamController');
        Route::get('team/{team}/delete', 'ServiceTeamController@delete')->name('team.delete');

        // bays
        Route::resource('bay', 'ServiceBayController');
        Route::get('bay/{bay}/delete', 'ServiceBayController@delete')->name('bay.delete');
    });

    Route::prefix('incident')->name('incident.')->group(function () {
        // types
        Route::resource('type', 'VehicleIncidentTypeController');
        Route::get('type/{type}/delete', 'VehicleIncidentTypeController@delete')->name('type.delete');

        // areas
        Route::resource('area', 'VehicleIncidentAreaController');
        Route::get('area/{area}/delete', 'VehicleIncidentAreaController@delete')->name('area.delete');

        // reports
        Route::get('report', 'VehicleIncidentController@report')->name('report');
        Route::post('report', 'VehicleIncidentController@runrpt')->name('runrpt');
    });

    Route::resource('incident', 'VehicleIncidentController');
    Route::get('incident/{incident}/delete', 'VehicleIncidentController@delete')->name('incident.delete');
    Route::get('incident/{incident}/clone', 'VehicleIncidentController@clone')->name('incident.clone');
    Route::get('incident/{incident}/close', 'VehicleIncidentController@close')->name('incident.close');
    Route::get('incident/{incident}/reopen', 'VehicleIncidentController@reopen')->name('incident.reopen');
});
