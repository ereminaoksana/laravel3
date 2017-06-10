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

Route::get('/', ['uses' => 'IndexController@html', 'as' => 'index']);

Route::get('/events', ['uses' => 'EventsController@html', 'as' => 'events']);

Route::group(['prefix' => 'items'], function () {

    Route::get('/{id}', 'ItemsController@html');

});

Route::group(['prefix' => 'profile'], function () {

    Route::get('/{id}', 'ProfileController@showprofile');

    Route::post('/savedata', 'ProfileController@savedata');

    Route::post('/addtocollect', 'ProfileController@addtocollect');

});


Route::get('/{genre}', 'GenreController@showgenre');


Route::auth();