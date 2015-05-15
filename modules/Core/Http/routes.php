<?php

$namespace = 'Cms\Core\Http\Controllers';

$prefix = cms()->prefix();

Route::group(['namespace' => $namespace . '\Auth'], function () {
    Route::controller('auth', 'AuthController');
    Route::controller('password', 'PasswordController');
});

Route::group(['prefix' => $prefix, 'middleware' => 'cms.auth', 'namespace' => $namespace], function () {
    Route::get('/', 'CoreController@index');
    Route::get('/users', 'UsersController@index');
});
