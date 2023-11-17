<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && auth()->user()->is_admin){
            return $next($request);
        }
        alert()::toast('Kamu bukan admin', 'error');
        return redirect('/admin');
    }
}
