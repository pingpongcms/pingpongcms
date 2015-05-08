<?php

namespace Cms\Core\Commands\Auth;

use Cms\Core\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class RegisterCommand extends Command
{

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
