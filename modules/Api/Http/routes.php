<?php

Route::group(['prefix' => 'api', 'namespace' => 'Pingpong\Cms\Api\Http\Controllers'], function () {
    Route::resource('users', 'UsersController', [
    	'names' => [
    		'index' => 'api.users.index',
    		'store' => 'api.users.store',
    		'update' => 'api.users.update',
    		'destroy' => 'api.users.destroy',
    	]
    ]);
});
