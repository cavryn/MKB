<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceHttpsInProduction
{
    public function handle(Request $request, Closure $next)
    {
        if (app()->environment('production')) {
            $request->server->set('HTTPS', 'on');
        }

        return $next($request);
    }
}