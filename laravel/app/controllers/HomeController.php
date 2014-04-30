<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function redirect()
	{
		return Redirect::action('HomeController@home');
	}
	public function home()
	{
		return View::make('home');
	}
	public function about()
	{
		return View::make('about');
	}
	public function staff()
	{
		return View::make('staff');
	}
	public function equipment()
	{
		return View::make('equipment');
	}
	public function locations()
	{
		return View::make('locations');
	}
	public function back()
	{
		return Redirect::intended();
	}
	public function services()
	{
		return View::make('services');
	}

}