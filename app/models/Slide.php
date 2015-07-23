<?php

use SleepingOwl\Models\SleepingOwlModel;

class Slide extends SleepingOwlModel {
	protected $fillable = ['category_id', 'post_id'];

	public function post()
	{
		return $this->belongsTo('Post');
	}

	public function category(){
		return $this->belongsTo('Category');
	}
}