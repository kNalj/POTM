<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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

        if (Auth::user() == null || Auth::user()->role->description != "admin") {
            return redirect()->route('home')->with(['fail' => 'You must be some kind of a wizard ?']);
        }

        return $next($request);
    }
}
