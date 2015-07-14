<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'body'];

}