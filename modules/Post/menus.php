<?php

Menu::modify('sidebar', function ($menu)
{
	$menu->dropdown('Posts', function ($sub) {
	    $sub->url('administrator/posts', 'All Posts', 1, ['icon' => 'fa fa-circle-o']);
	    $sub->url('administrator/posts/create', 'Add New', 2, ['icon' => 'fa fa-circle-o']);
	}, 3, ['icon' => 'fa fa-book']);

	$menu->dropdown('Pages', function ($sub) {
	    $sub->url('administrator/posts?type=page', 'All Pages', 1, ['icon' => 'fa fa-circle-o']);
	    $sub->url('administrator/posts/create?type=page', 'Add New', 2, ['icon' => 'fa fa-circle-o']);
	}, 4, ['icon' => 'fa fa-flag']);

	$menu->whereTitle('Settings', function ($sub) {
	    $sub->url('administrator/settings/posts', 'Posts', 2, ['icon' => 'fa fa-circle-o']);
	});
});