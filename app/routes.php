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

Route::get('register', function()
{
	return View::make('register');
});