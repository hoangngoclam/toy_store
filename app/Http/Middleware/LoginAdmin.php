<?php

namespace App\Http\Middleware;

use Closure;

class LoginAdmin
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
        if(session()->get("admin")){
            return $next($request);
        }
        else{
            return redirect('./dang_nhap_admin');
        }
    }
}
