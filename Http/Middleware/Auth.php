<?php

namespace Cms\Core\Http\Middleware;

use Closure;

class Auth
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
        if (! auth()->check()) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => false,
                    'code' => 401,
                    'message' => 'Unauthorized'
                ], 401);
            }

            return redirect('auth/login');
        }
        
        return $next($request);
    }
}
