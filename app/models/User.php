<?php

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class User extends SleepingOwlModel implements  ModelWithImageFieldsInterface
{

	use ModelWithImageOrFileFieldsTrait;
	protected $fillable = [
//		'UserName',
		'Name',
		'password',
//		'email',
		'photo',
//		'birthday',
//		'comment',

	];

	protected $hidden = [
		'created_at',
		'updated_at',
		'password',
		'remember_token',
	];

	public function getImageFields()
	{
		return [
			'image' => 'photo/',
			'photo' => '',
			'other' => ['photo/', function($directory, $originalName, $extension)
			{
				return $originalName;
			}]
		];
	}


	public function getFullNameAttribute()
	{
		return implode(' ', [
			$this->UserName,
			$this->Name
		]);
	}

//	public function getDates()
//	{
//		return array_merge(parent::getDates(), ['birthday']);
//	}


	public function setImage($field, $image)
	{
		if (is_null($image)) return;
		$filename = $image;
		if ($image instanceof UploadedFile) {
			$filename = $this->getFilenameFromFile(null, $field, $image);
			$this->$field->setFilename($filename);
		}
		$this->attributes[$field] = $filename;
	}



}





