<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CustomerMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Auth::guard('customer')->check()) {
            
        } else {
            return redirect('/customer/login');
        }
        return $next($request);
    }

}
