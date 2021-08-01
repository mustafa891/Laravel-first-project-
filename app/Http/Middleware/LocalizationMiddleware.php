<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationMiddleware
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
        if (session()->get('locale') != null) {
            App::setLocale(session()->get('locale'));

        }else {
            session()->put('locale','en');
            App::setLocale(session()->get('locale'));
            session()->put('secondeLang','ku');
        }
        return $next($request);
    }
}
