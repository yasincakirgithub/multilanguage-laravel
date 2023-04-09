<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguage
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
        $languages = ['tr','en'];

        if(in_array($request->language, $languages)) {
            \App::setLocale($request->language);
        }else{
            \App::setLocale('en');
        }

        return $next($request);
    }
}