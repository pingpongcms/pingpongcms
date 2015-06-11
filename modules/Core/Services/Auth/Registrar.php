<?php

namespace Pingpong\Cms\Core\Services\Auth;

use Pingpong\Cms\Core\Entities\User;

class Registrar
{

    public function create(array $data)
    {
        return User::create($data);
    }
}
