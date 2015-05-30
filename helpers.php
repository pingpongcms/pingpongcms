<?php

use Cms\Core\Entities\User;

if (! function_exists('cms')) {
    function cms()
    {
        return app('Cms\Core\Contracts\Services\Cms');
    }
}

if (! function_exists('user')) {
    function user()
    {
        return new User;
    }
}
