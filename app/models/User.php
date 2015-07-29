<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class User extends Eloquent implements  ModelWithImageFieldsInterface, UserInterface, RemindableInterface
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


	/**
	 * @param $field
	 * @return bool
	 */
	public function hasImageField($field)
	{
		// TODO: Implement hasImageField() method.
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		// TODO: Implement getReminderEmail() method.
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		// TODO: Implement getAuthIdentifier() method.
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		// TODO: Implement getAuthPassword() method.
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		// TODO: Implement getRememberToken() method.
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		// TODO: Implement setRememberToken() method.
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		// TODO: Implement getRememberTokenName() method.
	}

	public static function create(array $rule)
	{

	}

	public function roles()
	{
		return $this->belongsToMany('Role','users_roles');
	}

	public function isEmployee()
	{
		$roles=$this->roles->toArray();
		return !empty($roles);
	}
	public  function hasRole($check)
	{
		return in_array($check,array_fetch($this->roles->toArray(),'name'));

	}

	private function getIdInArray($array,$term)
	{
		foreach($array as $key=>$value)
		{
			if($value==$term)
			{
				return $key;
			}
		}
		throw new UnexpectedValueException;
	}

	public function makeEmployee($title)
	{
		$assigned_roles = array();
		$roles = array_fetch(Role::all()->toArray,'name');
		switch($title)
		{
			case 'administrator':
				$assigned_roles[]= $this->getIdInArray($roles,'create_posts');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_posts');
				$assigned_roles[]= $this->getIdInArray($roles,'delete_posts');
				$assigned_roles[]= $this->getIdInArray($roles,'create_categories');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_categories');
				$assigned_roles[]= $this->getIdInArray($roles,'delete_categories');
				$assigned_roles[]= $this->getIdInArray($roles,'create_users');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_users');
				$assigned_roles[]= $this->getIdInArray($roles,'delete_users');
				$assigned_roles[]= $this->getIdInArray($roles,'create_comments');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_comments');
				$assigned_roles[]= $this->getIdInArray($roles,'delete_comments');
				$assigned_roles[]= $this->getIdInArray($roles,'create_slide');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_slide');
				$assigned_roles[]= $this->getIdInArray($roles,'delete_slide');

			case 'author':
				$assigned_roles[]= $this->getIdInArray($roles,'create_posts');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_posts');
				$assigned_roles[]= $this->getIdInArray($roles,'create_categories');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_categories');
				$assigned_roles[]= $this->getIdInArray($roles,'create_comments');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_comments');

			case 'subscriber':
				$assigned_roles[]= $this->getIdInArray($roles,'create_comments');
				$assigned_roles[]= $this->getIdInArray($roles,'edit_comments');
				break;
			default:
				throw new \Exception("The Employee statys entered does not exist");

		}
		$this->roles()->attach($assigned_roles);
	}
}





