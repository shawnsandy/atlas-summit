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
    return view('page::index');
});

Route::group(['prefix' => "scans"], function () {
    Route::get('/', 'ScansController@index');
    Route::get('/{id}', 'ScansController@scans');
    Route::post('/rfid', 'ScansController@store');
    Route::post('/room', 'ScansController@room');
});

Route::group(['prefix' => "extras"], function () {
    Extras::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', 'AdminController@index');

    Route::resource("sponsors", "SponsorsController");

    Route::resource("regions", "RegionsController");

    Route::resource("rooms", "RoomsController");

    Route::resource("workshops", "WorkshopController");

    Route::resource("users", "UserAdminController");
});

Route::group(['prefix' => "extras"], function () {
    Extras::routes();
});

Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/', 'Summit\AdminController@index');


    Route::resource("sponsors", 'Summit\SponsorsController');

    Route::resource("regions", 'Summit\RegionsController');

    Route::resource("rooms", 'Summit\RoomsController');

    Route::resource("workshops", 'Summit\WorkshopController');

    Route::resource("users", 'Summit\UserAdminController');

});

Route::group(["prefix" => "summit"], function() {

   Route::resource('/u', 'Summit\WshopController');

   Route::resource('/bios/{id}', 'Summit\BiosController');

   Route::get("/activation", 'Summit\ActivationController');

   Route::get('/ws/{workshop_id}', 'Summit\WorkshopRegController');

});

Auth::routes();
