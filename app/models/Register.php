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
}