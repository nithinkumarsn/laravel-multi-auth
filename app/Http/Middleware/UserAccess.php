<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if(auth()->user()->type === 1){
             redirect()->route('admin.home');
            return $next($request);
        }
        
        elseif(auth()->user()->type === 0){
            redirect()->route('home');
            return $next($request);
        }
        elseif(auth()->user()->type === 2){
            redirect()->route('manager.home');
            return $next($request);
        }
        
        else{
            return response()->json(['You do not have permission to access for this page.']);
            /* return response()->view('errors.check-permission'); */
        }
          
    }
}
