<?php

Route::group(['prefix' => 'post', 'namespace' => 'Pingpong\\Cms\Post\Http\Controllers'], function () {
    Route::get('/', 'PostController@index');
});
