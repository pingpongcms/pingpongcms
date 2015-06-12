<?php

use Pingpong\Cms\Settings\Entities\Setting;

if (! function_exists('setting')) {
    function setting($key, $default = null)
    {
        return Setting::value($key, $default);
    }
}
