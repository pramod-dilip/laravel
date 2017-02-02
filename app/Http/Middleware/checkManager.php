<?php

namespace App\Http\Middleware;

use Closure;

class checkManager
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

        if('route'=>'/sale'){
            
        }

        return $next($request);
    }
}
