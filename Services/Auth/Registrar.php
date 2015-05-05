<?php

namespace Cms\Core\Services\Auth;

use Cms\Core\Entities\User;

class Registrar {

	public function create(array $data)
	{
		return User::create($data);
	}
	
}