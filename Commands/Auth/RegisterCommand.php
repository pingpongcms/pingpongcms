<?php

namespace Cms\Core\Commands\Auth;

use Cms\Core\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class RegisterCommand extends Command {

	public $request;

	public function __construct($request)
	{
		$this->request = $request;
	}

}