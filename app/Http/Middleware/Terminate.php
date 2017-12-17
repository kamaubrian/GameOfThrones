<?php

namespace App\Http\Middleware;

use Closure;

class Terminate
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
        echo "Executing Statements of Handle method of Terminate Middleware";

        return $next($request);
    }
    public function terminate($request,$response){
        echo"<br> Executing statements of Method of Terminate Middleware";
    }
}
