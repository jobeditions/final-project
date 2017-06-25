<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Authorised
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
        
     if(Auth::user()->admin)

        return $next($request);
     else
        Session::flash('info',"Vous n'êtes pas autorisé à effectuer cette action");
            return redirect()->back();

    }
}
