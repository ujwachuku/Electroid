<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (!$request->user()->isAdmin()) {
            return redirect()->back();
        }
        return $next($request);
    }
}
