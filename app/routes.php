<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('home', function()
{
	$numberOfRows = DB::table('aniko_hegedus_users')->count();
	if($numberOfRows == 0) {
		return View::make('install');
	} else {
		return View::make('login');
	}
});

Route::get('login', function()
{
	return View::make('login');
});
Route::post('checkLogin','CheckLoginController@checkLogin');
Route::post('logout','LogoutController@logout');

Route::post('pick','CheckLoginController@pick');
Route::post('edit','CheckLoginController@edit');

Route::get('registerForm', function()
{
	return View::make('register');
});
Route::post('registerNew','RegisterController@registerNew');

Route::post('createTable', 'CreateTableController@createTable');