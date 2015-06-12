<?php

namespace Pingpong\Cms\Core\Commands\Auth;

use Pingpong\Cms\Core\Commands\Command;

class VerifyEmailAddress extends Command
{

    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }
}
