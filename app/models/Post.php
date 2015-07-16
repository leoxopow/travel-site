<?php

class Post extends \Eloquent
{

    // Add your validation rules here
    public static $rules = [
    ];

    // Don't forget to fill this array
    protected $fillable = ['title', 'body'];

    public function category()
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