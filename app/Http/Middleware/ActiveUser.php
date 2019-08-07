<?php

namespace App\Http\Middleware;

use Closure;
use Cache;
use Carbon\Carbon;
use Auth;


class ActiveUser
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

        if( Auth::check()){
            $expireTime = Carbon::now()->addMinutes(5);
            Cache::put('active-user'. Auth::user()['id'] , true , $expireTime);
        }
        return $next($request);
    }
}
