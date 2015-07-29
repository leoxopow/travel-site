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

}
	public function comm()
	{
		return View::make('comment');
	}

	public function create()
	{
		$this->layout->content = View::make('users.create');
//        $user = new user();
//		$user -> fill(Input::all());
//		$id = $user ->register ();


	}
	public function store()
	{
		$data = Input::except(array('_token'));
		$rule = array(
			'name' 		=> 'required|unique:users',
			'username'  => 'required|unique:users',
			'email'		=> 'required|email|unique:users',
			'password'  => 'required|min:6|same:cpassword',
			'cpassword' => 'required|min:6'

		);
		
		$validator = Validator::make($data,$rule);
		if ($validator->fails())
		{
			return Redirect::route('posts.index');

		}
		else
		{
			Register::saveFormData(Input::except(array('_token','password')));
			$this->layout->content = View::make('users.create'	)
				->withMessage('You registered');
		}
		Register::saveFormData(Input::except(array('_token')));
	}


}

