<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\support\Facades\Auth;

class Admin
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->rol != 'admin') {

            return redirect('participante/dashboard');
        }

        return $next($request);
    }
/*
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect('/');
    }
*/
}
