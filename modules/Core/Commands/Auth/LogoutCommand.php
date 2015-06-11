<?php

namespace Pingpong\Cms\Core\Commands\Auth;

use Pingpong\Cms\Core\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class LogoutCommand extends Command implements SelfHandling
{

    public function handle()
    {
        $user = auth()->user();

        auth()->logout();
        
        return $user;
    }
}
