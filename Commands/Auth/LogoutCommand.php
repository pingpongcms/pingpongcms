<?php

namespace Cms\Core\Commands\Auth;

use Cms\Core\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class LogoutCommand extends Command implements SelfHandling {

	public function handle()
	{
		$user = auth()->user();

		auth()->logout();
		
		return $user;
	}

}