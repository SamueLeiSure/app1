<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/novel', 'NovelController@index');
Route::post('/novel', 'NovelController@demo');
Route::get('/novel/{id}', 'NovelController@show');
Route::get('/chapter/{id}', 'ChapterController@show');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
	Route::get('/novel', 'NovelController@index');
	Route::post('/novel', 'NovelController@store');
	Route::get('/novel/{id}', 'NovelController@show');
	Route::post('/chapter', 'ChapterController@store');
});