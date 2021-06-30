<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
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

        // dd(auth()->check());

        if (Auth::check()) {
            if(Auth::user()->role=='patient')
            {
                return $next($request);
            }else
            {
                Auth::logout();
                return redirect()->route('admin.login')->with('success','You are not Employee.');
            }

        }
        else{
            return redirect()->route('user.login');
        }

    }
}
