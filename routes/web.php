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

    $sponsors = [];
    return view('page::index', compact("sponsors"));
});

Route::group(['prefix' => "scans"], function () {
    Route::get('/', 'ScansController@index');
    Route::get('/{id}', 'ScansController@scans');
    Route::post('/rfid', 'ScansController@store');
    Route::post('/room', 'ScansController@room');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get("auth/setup", "Auth\AuthSetupController");

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:admin-ability'] ], function () {

    Route::get('/', 'AdminController@index');

    Route::resource("sponsors", "SponsorsController");

    Route::resource("regions", "RegionsController");

    Route::resource("rooms", "RoomsController");

    Route::resource("workshops", "WorkshopController");

    Route::resource("users", "UserAdminController");


});

Route::group(['prefix' => 'api',], function () {
    Route::get('/users/{start}/{end}', 'ApiController@users');
});

Route::group(['prefix' => "extras"], function () {
     Extras::routes();
});

Route::group(["prefix" => "summit"], function () {

    Route::resource('/u', 'Summit\WshopController', ['only' => ['show', 'index']]);

    Route::get('/wshops', 'Summit\WshopController@index');

    Route::resource('/bios', 'Summit\BiosController');

    Route::get('/myscheulde', 'Summit\BiosController@index');

    Route::get("/activation", 'Summit\ActivationController');

    Route::get('/ws/{workshop_id}', 'Summit\WorkshopRegController');

});

Route::group(["prefix" => "page"], function () {
    Pages::routes();
});


Auth::routes();
