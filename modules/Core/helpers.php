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

if (! function_exists('gravatar')) {
    /**
    * Gravatar URL from Email address
    *
    * @param string $email Email address
    * @param string $size Size in pixels
    * @param string $default Default image [ 404 | mm | identicon | monsterid | wavatar ]
    * @param string $rating Max rating [ g | pg | r | x ]
    *
    * @return string
    */
    function gravatar($email, $size = 60, $default = 'mm', $rating = 'g')
    {
        return 'http://www.gravatar.com/avatar/' . md5(strtolower(trim($email))) . "?s={$size}&d={$default}&r={$rating}";
    }
}
