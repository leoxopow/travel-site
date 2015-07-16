<?php

class Slide extends \Eloquent {
	protected $fillable = [];

	public function post()
	{
		return $this->belongsTo('Post');
	}

	public function category(){
		return $this->belongsTo('Category');
	}
}