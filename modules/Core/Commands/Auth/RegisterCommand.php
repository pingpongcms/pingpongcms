<?php

namespace Pingpong\Cms\Core\Commands\Auth;

use Pingpong\Cms\Core\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class RegisterCommand extends Command
{

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
