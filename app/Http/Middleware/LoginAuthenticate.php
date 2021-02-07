<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$level)
    {
        if(!Session()->has('LoggedUser')){
            return back()->with('fail', 'Login First !!!');
        }else{
            if (in_array($request->user()->level,$level)) {
                return $next($request);
            }
            return route('home');
        }
    }
}
