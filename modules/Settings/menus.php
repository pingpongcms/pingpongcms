<?php

$menu = Menu::instance('sidebar');

$menu->dropdown('Settings', function ($sub)
{
	$sub->url('administrator/settings', 'General', 1, ['icon' => 'fa fa-circle-o']);
}, 6, ['icon' => 'fa fa-wrench']);