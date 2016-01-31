<?php

namespace App\Http\Middleware;

use Closure;
use Parse\ParseUser;
use Parse\ParseException;

class Agriculturist
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
        try{
            if($request->session()->has('username')) {
                return $next($request);
            } else {
                return redirect('/');
            }
        }
        catch (ParseException $e) {
            return redirect('/');
        }
    }
}
