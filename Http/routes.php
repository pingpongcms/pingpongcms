<?php

Route::group(['prefix' => 'settings', 'namespace' => 'Cms\Settings\Http\Controllers'], function()
{
	Route::get('/', 'SettingsController@index');
});