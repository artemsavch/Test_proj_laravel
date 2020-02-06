<?php

namespace App\Http\Middleware\Test;

use Closure;

class MyMiddleware
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
            if($request->page != 'pages') {

            return  redirect()->route('index.show');

        }

//        echo 'Middle ';

//        $response = $next($request);

//        echo ' Middle ';

        return $next($request);

    }
}
