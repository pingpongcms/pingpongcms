<?php

Route::group(['prefix' => 'settings', 'namespace' => 'Pingpong\Cms\Settings\Http\Controllers'], function () {
    Route::get('/', 'SettingsController@index');
});

backend_routes(function ($router) {
    $router->group(['namespace' => 'Pingpong\Cms\Settings\Http\Controllers\Admin'], function () {
        Route::get('settings', [
            'as' => 'admin.settings.index',
            'uses' => 'SettingsController@index'
        ]);
        Route::post('settings', [
            'as' => 'admin.settings.update',
            'uses' => 'SettingsController@update'
        ]);
    });
});