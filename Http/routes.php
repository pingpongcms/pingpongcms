<?php

Route::group(['prefix' => 'api', 'namespace' => 'Cms\Api\Http\Controllers'], function () {
    Route::resource('users', 'UsersController');
});
