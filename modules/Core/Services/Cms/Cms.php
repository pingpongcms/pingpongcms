<?php

namespace Pingpong\Cms\Core\Services\Cms;

use Pingpong\Cms\Core\Contracts\Services\Cms as CmsContract;

class Cms implements CmsContract
{

    public function prefix($extra = null, $separator = '/')
    {
        return config('cms.prefix') . ($extra ? $separator . $extra : null);
    }

    public function redirect($to, $status = 302, $headers = array(), $secure = null)
    {
        return app('redirect')->to($this->prefix($to), $status, $headers, $secure);
    }

    public function route($name, $parameters = array(), $absolute = true, $route = null)
    {
    	return route($this->prefix($name, '.'), $parameters, $absolute, $route);
    }

    public function url($url, array $parameters = array(), $secure = null)
    {
    	return url($this->prefix($url), $parameters, $secure);
    }
}
