<?php

Route::group(['prefix' => 'menus', 'namespace' => 'Pingpong\\Cms\Menus\Http\Controllers'], function () {
    Route::get('/', 'MenusController@index');
});
