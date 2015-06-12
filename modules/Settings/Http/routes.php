<?php

Route::group(['prefix' => 'settings', 'namespace' => 'Pingpong\Cms\Settings\Http\Controllers'], function()
{
	Route::get('/', 'SettingsController@index');
});

Event::listen('cms.routes', function ($router)
{
	$router->group(['namespace' => 'Pingpong\Cms\Settings\Http\Controllers\Admin'], function ()
	{
		Route::get('settings', [
			'as' => 'settings.index',
			'uses' => 'SettingsController@index'
		]);
		Route::post('settings', [
			'as' => 'settings.update',
			'uses' => 'SettingsController@update'
		]);
	});
});