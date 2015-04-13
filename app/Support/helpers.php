<?php

use App\Option;

if (! function_exists('option')) {
    /**
     * Get a value option from database by given option key.
     *
     * @param  string  $key
     * @param  null    $default
     * @return mixed
     */
    function option($key, $default = null)
    {
        try {
            return Option::remember($key, $default);
        } catch (Exception $e) {
            return value($default);
        }
    }
}

if (! function_exists('a')) {
    /**
     * Asset helper.
     *
     * @param  string $url
     * @return string
     */
    function a($url)
    {
        return asset($url, config('cms.https', false));
    }
}

if (! function_exists('cache')) {
    /**
     * Cache something.
     * 
     * @param  string $key
     * @param  callable $callback
     * @return mixed
     */
    function cache($key, $callback)
    {
        return Cache::remember($key, config('cms.cache.lifetime'), $callback);
    }
}