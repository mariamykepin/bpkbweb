<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class form
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika ini adalah request POST, lakukan verifikasi CSRF
        if ($request->isMethod('post')) {
            // Verifikasi token CSRF
            if (!$request->has('_token') || !hash_equals($request->session()->token(), $request->_token)) {
                abort(419, 'Page Expired');
            }
        }

        return $next($request);
    }
}
