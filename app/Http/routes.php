<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('posts', 'PostsController', ['only' => ['index', 'show']]);
Route::get('posts/{year}/{month}', [
    'as' => 'posts.archive',
    'uses' => 'PostsController@archive'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::get('/', [
        'as' => 'admin.index',
        'uses' => 'DashboardController@index'
    ]);
    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('tags', 'TagsController');
    Route::resource('users', 'UsersController');
});

Route::get('{slug}', [
    'as' => 'post',
    'uses' => 'PostsController@show'
]);