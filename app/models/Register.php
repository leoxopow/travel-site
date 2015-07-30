<?php
class Register extends Eloquent
{
    protected $guarded = array();
    protected $table ='users';
    public $timestamps = false;

    public static function saveFormData($data)
    {
        DB::table('users')->insert($data);
    }

    public function register()
    {
        return[
          'name'        => Input::get("name"),
          'username'    => Input::get("username"),
          'email'       => Input::get("email"),
          'password'    => Input::get("password")

        ];

    }
}