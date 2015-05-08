<?php

namespace Cms\Core\Handlers\Commands\Auth;

use Cms\Core\Commands\Auth\VerifyEmailAddress;
use Cms\Core\Confirmation\InvalidConfirmationCodeException;
use Cms\Core\Entities\User;

class VerifyEmailAddressHandler {

	public function handle(VerifyEmailAddress $command)
	{
		$user = User::whereConfirmationCode($command->code)->first();

		if (is_null($user)) {
			throw new InvalidConfirmationCodeException("Invalid Confirmation Code.");
		}

		$user->confirm();

		return $user;
	}

}