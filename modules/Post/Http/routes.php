<?php

Route::group(['prefix' => 'post', 'namespace' => 'Pingpong\\Cms\Post\Http\Controllers'], function () {
    Route::get('/', 'PostController@index');
});

Event::listen('backend.routes', function ($router) {
    $router->group(['namespace' => 'Pingpong\Cms\Post\Http\Controllers\Admin'], function () {
        Route::resource('posts', 'PostsController');
    });
});