<?php

use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

class Post extends SleepingOwlModel implements ModelWithImageFieldsInterface
{

    use ModelWithImageOrFileFieldsTrait;

	    // Add your validation rules here
    public static $rules = ['title', 'body', 'category_id'];

    // Don't forget to fill this array
    protected $fillable = ['user_id', 'category_id', 'title', 'body', 'thumbnail', 'description', 'typecol'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    public static function getList()
    {
        $all = Post::all();
        $arr = [];
        foreach($all as $item)
        {
            $arr[$item->id] = $item->title;
        }
        return $arr;
    }

    public function getImageFields()
    {
        return [
            'thumbnail' => 'thumbnails/',
            'photo' => '',
            'other' => ['other_images/', function($directory, $originalName, $extension)
            {
                return $originalName;
            }]
        ];
    }


    public function category()
    {
        return $this->belongsTo('Category');
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
