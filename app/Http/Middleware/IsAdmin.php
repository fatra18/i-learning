<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() && Auth::user()->roles == 'Admin'.'Teacher'){
            return $next($request);
        }
        
        // return $next($request);
        return redirect('/home')->with('error','Anda Tidak Dapat Akses Ke Halaman Ini','!!');
    }
}
