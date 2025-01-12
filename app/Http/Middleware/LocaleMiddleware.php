<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $availLocale = (array)config('app.locales');

        if(session()->has('locale') && array_key_exists(session()->get('locale'),$availLocale)){
            app()->setLocale(session()->get('locale'));
        }
        return $next($request);
    }
}
