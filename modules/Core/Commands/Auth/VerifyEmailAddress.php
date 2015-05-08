<?php

namespace Cms\Core\Commands\Auth;

use Cms\Core\Commands\Command;

class VerifyEmailAddress extends Command {

	public $code;

	public function __construct($code)
	{
		$this->code = $code;
	}
	
}