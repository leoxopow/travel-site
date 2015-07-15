<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::resource('posts', 'PostsController');
Route::resource('categories', 'CategoriesController');
Route::resource('tags', 'TagsController');
Route::resource('users', 'UsersController');
Route::get('user/signUp', 'UsersController@create');
Route::get('user/login', 'UsersControllers@index');
Route::post('user/login', 'UsersController@auth');
Route::get('user/logout', 'UsersController@logout');
Route::controller('password', 'RemindersController');