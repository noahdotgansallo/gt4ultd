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

Route::get('/', 'HomeController@redirect');
Route::get('/home', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/team', 'HomeController@staff');
Route::get('/equipment', 'HomeController@equipment');
Route::get('/locations', 'HomeController@locations');
Route::get('back', 'HomeController@back');
Route::get('/services', 'HomeController@services');
Route::get('/contact', 'HomeController@contact');
App::missing(function($exception)
	{
	    return Response::view('missing', array(), 404);
	});