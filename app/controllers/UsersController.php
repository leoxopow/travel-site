<?php

class UsersController extends \BaseController {


public function getIndex()
{

	$Users = User::allUsers()->count();
	$rows = [];
	foreach ($rows as $row)
	{
		$obj = new StdClass;
		$obj->label = $row->title;
		$obj->value = $row->allUsers->count();
		$Users[] = $obj;
	}

	$data = compact('allUsers');
	return View::make('index', $data);
}
	Public function auth()
{
	return View::make('comment');
}

	public static function create()
	{

	}
	public function store()
	{
		$data = Input::except(array('_token'));
		$rule = array(
			'name' 		=> 'required|unique:users',
			'username'  => 'required|unique:users',
			'email'		=>'required|email|unique:users',
			'password'  => 'required|min:6|same:cpassword',
			'cpassword' => 'required|min:6'

		);
		$validator = Validator::make($data,$rule);
		if ($validator->fails())
		{
			return Redirect::to('create')
				->withErrors($validator->messages());
		}
		else
		{
			Register::saveFormData(Input::except(array('_token','password')));
			return Redirect::to('create')
				->withMessage('You registered');
		}
		Register::saveFormData(Input::except(array('_token')));
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::back();
	}
}

