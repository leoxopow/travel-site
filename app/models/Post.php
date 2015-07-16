<?php

use SleepingOwl\Models\SleepingOwlModel;
class Post extends SleepingOwl\Models\SleepingOwlModel {

	// Add your validation rules here
	public static $rules = ['title','body','category'];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'category_id'];

	protected $hidden = [
		'created_at',
		'updated_at'
	];

 public  static function getList(){
	 return array();
 }
	}