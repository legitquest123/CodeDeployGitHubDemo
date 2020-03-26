<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class test
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
       
        if (Auth::check()) 
        {
            return $next($request);
        }
         else
         {
             return redirect('admin/signin')->with('errormessage','Opps! You are not Logged in Please login to continue');
         }
    }
}
