<?php

/*
|--------------------------------------------------------------------------
| Register Namespaces And Routes
|--------------------------------------------------------------------------
|
| When a module starting, this file will executed automatically. This helps
| to register some namespaces like translator or view. Also this file
| will load the routes file for each module. You may also modify
| this file as you want.
|
*/

require __DIR__ . '/middlewares.php';

require __DIR__ . '/helpers.php';

require __DIR__ . '/menus.php';

require __DIR__ . '/Http/routes.php';

Event::listen('modules.settings.boot', function ()
{
	$menu = Menu::instance('sidebar');

	$menu->whereTitle('Settings', function ($sub)
	{
		if (!is_null($sub)) {
			$sub->url('administrator/settings/modules', 'Modules', 3, ['icon' => 'fa fa-circle-o']);
		}
	});
});
