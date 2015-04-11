<?php

namespace App\Widgets;

class OptionWidget
{
    /**
     * Register widget handler for "@option".
     *
     * @param  string  $key
     * @param  null    $default
     * @return mixed
     */
    public function register($key, $default = null)
    {
        return option($key, $default);
    }
}
