<?php

namespace Cms\Core\Handlers\Commands\Auth;

use Cms\Core\Commands\Auth\RegisterCommand;
use Cms\Core\Services\Auth\Registrar;

class RegisterCommandHandler {

	protected $registrar;

	public function __construct(Registrar $registrar)
	{
		$this->registrar = $registrar;
	}

	public function handle(RegisterCommand $command)
	{
		$data = $command->request->all();

		$user = $this->registrar->create($data);

		return $user;
	}

}