<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class LangueMiddleware
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

        if(!Session::has('locale'))
        {
            Session::put('locale', Config::get('app.locale'));
        }

        app()->setLocale(Session::get('locale'));

        return $next($request);
    }
}
