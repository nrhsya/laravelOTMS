<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableBack
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        
        return $response->header('Cache-Control','nocache, no-store, must-revalidate')
            ->header('Pragma','no-cache');
    }
}