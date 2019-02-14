<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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

        if(Auth::check()) {
            $user = Auth::user();
            $a = true; //faire une condition
            if($a) {
              return $next($request);
            }
          }
          abort(403);
    }
}
