<?php

$namespace = 'Pingpong\Cms\Core\Http\Controllers';

Route::group(['namespace' => $namespace . '\Auth'], function () {
    Route::controller('auth', 'AuthController', [
        'getLogin' => 'login.index',
        'postLogin' => 'login.store',
        'getRegister' => 'register.index',
        'postRegister' => 'register.store',
        'getLogout' => 'logout',
        'getConfirmation' => 'user.confirmation'
    ]);
    Route::controller('password', 'PasswordController', [
        'getEmail' => 'password.email.index',
        'postEmail' => 'password.email.store',
        'getReset' => 'password.reset.index',
        'postReset' => 'password.reset.store'
    ]);
});

Route::group(['prefix' => cms()->prefix(), 'middleware' => config('cms.middleware'), 'namespace' => $namespace], function () {
    Route::get('/', 'CoreController@index');
    Route::get('/users', 'UsersController@index');
});
