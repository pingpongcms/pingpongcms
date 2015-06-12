<?php

if (! function_exists('cms')) {
    function cms()
    {
        return app('Pingpong\Cms\Core\Contracts\Services\Cms');
    }
}

if (! function_exists('user')) {
    function user()
    {
        $user = config('auth.model', 'Pingpong\Cms\Core\Entities\User');

        return new $user;
    }
}

if (!function_exists('page_title')) {
    function page_title($default = null)
    {
        return strip_tags(config('cms.title', $default));
    }
}
