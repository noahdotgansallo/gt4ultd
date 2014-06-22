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
	public function contact()
	{
		return View::make('contact');
	}
	public function handleContact()
	{
		$subject = Input::get('subject');
		$topic = Input::get('topic');
		$email = Input::get('email');
		$content = Input::get('content');
		$data = array('email' => $email, 'subject' => $subject, 'topic' => $topic, 'content'=>$content);
		Mail::send('emails.contact', $data, function($message)
		{
			$message->from(Input::get('email'));
			$message->to('info@gt4ultd.com')->subject(Input::get('subject'));
		});

		return Redirect::to('/');
	}

}