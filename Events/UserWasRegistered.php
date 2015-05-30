<?php

namespace Cms\Core\Events;

class UserWasRegistered {

	public $user;

	public function __construct($user)
	{
		$this->user = $user;
	}

}