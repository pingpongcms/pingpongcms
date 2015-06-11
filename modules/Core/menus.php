<?php

Menu::create('sidebar', function ($menu)
{
	$menu->setPresenter('Pingpong\Cms\Core\Presenters\Menus\SidebarPresenter');
	$menu->setPrefixUrl(cms()->prefix());
	$menu->enableOrdering();
	$menu->header('MAIN NAVIGATION');
	$menu->url('/', 'Dashboard', 1, ['icon' => 'fa fa-dashboard']);
	$menu->url('/users', 'Users', 2, ['icon' => 'fa fa-users']);
});

