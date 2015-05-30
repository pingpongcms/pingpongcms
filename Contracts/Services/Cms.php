<?php

namespace Cms\Core\Contracts\Services;

interface Cms
{

    public function prefix($extra = null);

    public function redirect($to, $status = 302, $headers = array(), $secure = null);
}
