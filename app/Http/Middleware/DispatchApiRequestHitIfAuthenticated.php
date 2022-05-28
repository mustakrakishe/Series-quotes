<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DispatchApiRequestHitIfAuthenticated
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
        if ($user = $request->user()) {
            \App\Events\ApiRequestHit::dispatch($user);
        }

        return $next($request);
    }
}
