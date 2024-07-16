<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\support\Facades\Auth;
class Participante
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->rol != 'participante') {
            return redirect('admin/dashboard');
        }

        return $next($request);
    }
}
