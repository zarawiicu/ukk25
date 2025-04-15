<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    public function handle($request, Closure $next, $role)
{
    if (auth()->user()->role != $role) {
        abort(403, 'Kamu tidak punya akses.');
    }

    return $next($request);
}

}
