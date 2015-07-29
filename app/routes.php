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
Route::get('admin','AdminController@index');
Route::get('admin/posts','AdminController@createPost');
Route::get('admin/categories',['before'=>'csrf', 'uses'=>'AdminController@createCategory']);
Route::get('admin/users','UserController@getIndex');


Route::get('user/login','UsersController@create');
Route::post('user/login', 'UsersController@auth');
Route::get('user/logout', 'UsersController@logout');
Route::controller('password', 'RemindersController');
Route::post('subscribe', ['before' => 'csrf', 'uses'=>'HomeController@subscribe']);


Route::post('register_action', function(){
    $obj= new UsersController();
    return $obj->store();
});

Route::any('imgPostThumbnail/{path}', 'HomeController@imgPostThumbnail');
Route::any('imgPostThumbnail2col/{id}', 'HomeController@imgPostThumbnail2col');
Route::any('imgSlideCategory/{id}', 'HomeController@imgSlideCategory');
Route::any('privacy', 'HomeController@privacy');

Route::get('search', 'HomeController@search');
Route::any('pageHome', 'HomeController@pageHome');
Route::any('pageCategory', 'CategoriesController@pageCategory');
