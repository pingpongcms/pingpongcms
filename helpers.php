<?php

if (! function_exists('cms')) {
    function cms()
    {
        return app('Cms\Core\Contracts\Services\Cms');
    }
}

if (! function_exists('user')) {
    function user()
    {
        $user = config('auth.model', 'Cms\Core\Entities\User');

        return new $user;
    }
}

if (!function_exists('page_title')) {
	function page_title($default = null)
	{
		return strip_tags(config('cms.title', $default));
	}
}
