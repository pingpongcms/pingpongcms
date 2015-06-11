<?php

namespace Pingpong\Cms\Core\Http\Middleware;

use Closure;

class Guest
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            return cms()->redirect('/');
        }

        return $next($request);
    }
}
