<?php

Route::group(['prefix' => 'settings', 'namespace' => 'Pingpong\Cms\Settings\Http\Controllers'], function()
{
	Route::get('/', 'SettingsController@index');
});