<?php

namespace Cms\Core\Handlers\Commands\Auth;

use Cms\Core\Commands\Auth\LoginCommand;

class LoginCommandHandler {

	public function handle(LoginCommand $command)
	{
		$credentials = [
			'email' => $command->email,
			'password' => $command->password,
		];

		$remember = $command->remember;

		return auth()->attempt($credentials, $remember);
	}

}