<?php

namespace App\Listeners;

use App\Events\ApiRequestHit;
use Illuminate\Support\Facades\Redis;

class CountUserRequestHit
{
    public function handle(ApiRequestHit $event)
    {
        Redis::incr('api:users:' . $event->getUser()->id);
    }
}
