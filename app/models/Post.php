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
	}    public function category()
    {
        return $this->belongsTo('category');
    }

    public function slides()
    {
        return $this->hasMany('Slide');
    }

    public function tags()
    {
        return $this->belongsTo('Post');
    }

    public function slugUrl()
    {
        return URL::asset($this->category->slug . '/' . $this->slug);
    }
}