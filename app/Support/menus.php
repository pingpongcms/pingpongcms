<?php

Menu::create('admin.left', function ($menu)
{
	$menu->route('admin.index', 'Home');
	$menu->dropdown('Posts', function ($sub)
	{
		$sub->route('admin.posts.index', 'All Posts');
		$sub->route('admin.posts.create', 'Add New');
	});
	$menu->dropdown('Pages', function ($sub)
	{
		$sub->route('admin.posts.index', 'All Pages', ['type' => 'page']);
		$sub->route('admin.posts.create', 'Add New', ['type' => 'page']);
	});
	$menu->dropdown('Categories', function ($sub)
	{
		$sub->route('admin.categories.index', 'All Categories');
		$sub->route('admin.categories.create', 'Add New');
	});
	$menu->dropdown('Tags', function ($sub)
	{
		$sub->route('admin.tags.index', 'All Tags');
		$sub->route('admin.tags.create', 'Add New');
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