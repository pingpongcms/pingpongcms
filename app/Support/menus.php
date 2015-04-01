<?php

Menu::create('admin.left', function ($menu)
{
	$menu->route('admin.index', 'Home');
	$menu->dropdown('Posts', function ($sub)
	{
		$sub->route('admin.posts.index', 'All Posts');
	});
});

Menu::create('admin.right', function ($menu)
{
	$menu->style('navbar-right');
	$menu->url('/', 'Visit Site', ['target' => '_blank']);
	$menu->dropdown('Account', function ($sub)
	{
		$sub->url('auth/logout', 'Logout');
	});
});