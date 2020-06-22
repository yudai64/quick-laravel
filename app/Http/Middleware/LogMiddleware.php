<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
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
        file_put_contents('C:/Data/access.log', date('Y-m-d H:i:s')."\n", FILE_APPEND);

        $response = $next($request);

        $response->setContent(mb_strtoupper($response->content()));

        return $response;
    }
}
