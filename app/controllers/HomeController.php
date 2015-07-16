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

	public function index()
	{
		$this->layout->content = View::make('pages.index');
	}

	public function privacy()
	{
		$this->layout->content = View::make('pages.privacy');
	}

	public function subscribe()
	{
		$email = Input::get('email');
		$password = str_random(6);
		$validator = Validator::make(['email' => $email], ['email'=>'required|email|unique:users']);
		if (!$validator->fails()) {
			$user = new User();
			$user->email = $email;
			$user->password = Hash::make($password);
			$user->save();
		}
	}
}
