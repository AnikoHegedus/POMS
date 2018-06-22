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
	return View::make('home');
});

Route::get('about', function()
{
	return View::make('about');
});

Route::get('login', function()
{
	return View::make('login');
});
Route::post('checkLogin','CheckLoginController@checkLogin');
Route::post('logout','LogoutController@logout');
Route::post('pickUser/{userId}','CheckLoginController@pickUser');
Route::post('editUser/{userId}','CheckLoginController@editUser');

Route::get('registerForm','RegisterController@registerForm');
Route::post('registerNew','RegisterController@registerNew');