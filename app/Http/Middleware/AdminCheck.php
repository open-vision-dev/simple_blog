<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminCheck
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
      dd(auth()->user());
    //   dd(Auth::check());
    //    $auth=Auth::user();
    
    // die();
//	if(auth()->user()->admin==FALSE){
  //     
    //    return redirect()->route('/errors/',['message'=>'sorry you are not an admin user please contact support to upgrade your account']);
//	}
        return $next($request);
    }
}
