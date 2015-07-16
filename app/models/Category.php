<?php

use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Admin\Models\Form\Interfaces\FormItemInterface;

class Category extends SleepingOwl\Models\SleepingOwlModel {

	// Add your validation rules here
	public static $rules = ['title','description'];

	// Don't forget to fill this array
	protected $fillable = ['title', 'color', 'description', 'slug'];
	protected $hidden = [
		'created_at',
		'updated_at',];

//	public function getImageFields()
//	{

//	}
	public static function getList(){
		$all = Category::all();
		$arr = [];
		foreach($all as $item)
		{
			$arr[$item->id] = $item->title;
		}
		return $arr;
	}
}