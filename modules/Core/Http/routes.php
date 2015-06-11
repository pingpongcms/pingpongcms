<?php

$namespace = 'Pingpong\Cms\Core\Http\Controllers';

$prefix = cms()->prefix();

Route::group(['namespace' => $namespace . '\Auth'], function () {
    Route::controller('auth', 'AuthController');
    Route::controller('password', 'PasswordController');
});

Route::group(['prefix' => $prefix, 'middleware' => config('cms.middleware'), 'namespace' => $namespace], function () {
    Route::get('/', 'CoreController@index');
    Route::get('/users', 'UsersController@index');
});

Route::group([
	'prefix' => $prefix,
	'middleware' => config('cms.middleware'),
	'namespace' => 'App\Http\Controllers'
], function () {
   event('cms.routes', app('router'));
});