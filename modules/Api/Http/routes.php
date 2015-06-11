<?php

Route::group(['prefix' => 'api', 'namespace' => 'Pingpong\Cms\Api\Http\Controllers'], function () {
    Route::resource('users', 'UsersController');
});
