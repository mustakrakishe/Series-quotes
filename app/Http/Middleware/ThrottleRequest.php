<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Middleware\ThrottleRequests as LaravelThrottleRequest;

class ThrottleRequest extends LaravelThrottleRequest
{
    protected function resolveRequestSignature($request)
    {
        if ($user = auth('sanctum')->user()) {
            return sha1($user->getAuthIdentifier());
        }
        
        parent::resolveRequestSignature($request);
    }
}
