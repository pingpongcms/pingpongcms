<?php

namespace Cms\Core\Services\Cms;

use Cms\Core\Contracts\Services\Cms as CmsContract;

class Cms implements CmsContract {

	public function prefix($extra = null)
	{
		return config('cms.prefix') . ($extra ? '/' . $extra : null);
	}

	public function redirect($to, $status = 302, $headers = array(), $secure = null)
	{
		return app('redirect')->to($this->prefix($to), $status, $headers, $secure);
	}
	
}