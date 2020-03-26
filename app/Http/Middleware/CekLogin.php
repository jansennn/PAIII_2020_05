<?php

namespace App\Http\Middleware;

use Closure;
use 

class CekLogin
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
        // $cbt = \App\Cbt::where('email',$request->email)->first();
        // if($cbt)
        return $next($request);
    }
}
