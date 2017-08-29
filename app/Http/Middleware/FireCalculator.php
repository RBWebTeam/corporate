<?php

namespace App\Http\Middleware;

use Closure;
use session;
class FireCalculator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
             
         // if (!$request->session()->exists('admin')){
         //     return redirect('/');
         //   }  return $next($request);
         

          if (!$request->session()->exists('admin')){
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->back();
            }
        } 

        return $next($request);

    }
}
