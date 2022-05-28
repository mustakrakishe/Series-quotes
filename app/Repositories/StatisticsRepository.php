<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Redis;

class StatisticsRepository
{
    public function getByUserId(int $userId)
    {
        return Redis::get('api:users:' . $userId);
    }
}