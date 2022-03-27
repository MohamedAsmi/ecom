<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Http\Request ;
class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // protected $proxies = '*';

    // protected $headers = Request::HEADER_X_FORWARDED_AWS_ELB;
    public function handle($request, Closure $next)
    {
        if(empty(session('user'))){
            return redirect()->route('login.form');
        }
        else{
            return $next($request);
        }
    }
}