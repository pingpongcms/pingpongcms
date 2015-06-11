<?php

namespace Pingpong\Cms\Core\Handlers\Commands\Auth;

use Pingpong\Cms\Core\Commands\Auth\RegisterCommand;
use Pingpong\Cms\Core\Events\UserWasRegistered;
use Pingpong\Cms\Core\Services\Auth\Registrar;

class RegisterCommandHandler
{

    protected $registrar;

    public function __construct(Registrar $registrar)
    {
        $this->registrar = $registrar;
    }

    public function handle(RegisterCommand $command)
    {
        $user = $this->registrar->create($command->data);

        event(new UserWasRegistered($user));
        
        return $user;
    }
}
