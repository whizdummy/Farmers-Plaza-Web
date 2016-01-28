<?php
use Parse\ParseObject;

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

// Route::get('/', 'PageController@index');
Route::get('/', function() {
	return view('landing');
});
Route::get('/maintenance', 'PageController@maintenance');

Route::post('/submitForm', 'PageController@submitForm');

Route::post('/verifyUser', 'PageController@verifyUser');
