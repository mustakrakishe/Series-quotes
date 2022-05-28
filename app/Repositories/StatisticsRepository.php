<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Redis;

class StatisticsRepository
{
    public function getByUserId(int $userId)
    {
        return Redis::get('api:users:' . $userId);
    }

    public function getTotal()
    {
        return Redis::get('api-total-requests');
    }

    public function updateTotal()
    {
        Redis::set('api-total-request', $this->countTotalRequests());
    }

    public function countTotalRequests() {
        return array_reduce($this->getKeysStartWith('api:users:'), function ($sum, $cacheCellKeyName) {
            return $sum + Redis::get($cacheCellKeyName);
        });
    }

    public function getKeysStartWith(string $startWith) {
        return array_map(function ($key) {
            return str_replace(config('database.redis.options.prefix'), '', $key);
        }, Redis::keys("$startWith*"));
    }
}