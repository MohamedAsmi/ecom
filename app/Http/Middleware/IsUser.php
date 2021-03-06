<?php

namespace App\Http\Middleware;

use Closure;

class IsUser
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
        // dd($request);
        if(auth()->user()->is_admin == 0){
            return $next($request);
        }
   
        // return redirect('home')->with('error',"You don't have access.");
    }
}