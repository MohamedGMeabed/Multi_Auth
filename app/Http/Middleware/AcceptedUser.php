<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Providers\RouteServiceProvider;

class AcceptedUser
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
        if(Auth::check()){
        
        if(Auth::user()->status == 'accepted'){
            return response()->view('siteInfo');
        }else{
            return redirect(RouteServiceProvider::HOME);
        }
    }
       //return $next($request);
    }
}
