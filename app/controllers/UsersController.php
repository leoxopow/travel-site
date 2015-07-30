<?php

class UsersController extends \BaseController
{


	public function getIndex()
	{

		$Users = User::allUsers()->count();
		$rows = [];
		foreach ($rows as $row) {
			$obj = new StdClass;
			$obj->label = $row->title;
			$obj->value = $row->allUsers->count();
			$Users[] = $obj;
		}

		$data = compact('allUsers');
		return View::make('index', $data);
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
		$input = Input::all();
		$rule = array(
			'name' => 'required|unique:users',
			'username' => 'required|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6|same:cpassword',
			'cpassword' => 'required|min:6',
		);

		$v = Validator:: make($input, $rule);
		if ($v->fails()) {
			return Redirect::to('user/login')->withError($v);
		} else {
			$password = $input['password'];
			$password = Hash::make($password);

			$user = new User;
			$user->name = $input['name'];
			$user->username = $input['username'];
			$user->email = $input['email'];
			$user->password = $password;
				if(Input::hasFile('avatar'))
				{
					$file = Input::file('avatar');
					$file = $file->move(public_path(). '/images/', $file->getClientOriginalName());
					$user->avatar = $file->getRealPath();
				}
			$user->makeEmployee('subscriber');
			$user->save();

			return Redirect::to('/');
		}
	}
}








