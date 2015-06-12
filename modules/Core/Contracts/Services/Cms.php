<?php

namespace Pingpong\Cms\Core\Contracts\Services;

interface Cms
{

    public function prefix($extra = null);

    public function redirect($to, $status = 302, $headers = array(), $secure = null);

    public function route($route, array $parameters = array(), $absolute = true, $route = null);
    
    public function url($url, array $parameters = array(), $secure = null);
}
