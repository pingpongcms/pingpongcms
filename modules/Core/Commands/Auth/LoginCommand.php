<?php

namespace Pingpong\Cms\Core\Commands\Auth;

use Pingpong\Cms\Core\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class LoginCommand extends Command
{

    public $email;

    public $password;
    
    public $remember;

    public $login;

    public function __construct($email, $password, $remember = false, $login = false)
    {
        $this->email = $email;
        $this->password = $password;
        $this->remember = $remember;
        $this->login = $login;
    }
}
