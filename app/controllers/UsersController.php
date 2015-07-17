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
	return View::make('admin.index', $data);
}
}

