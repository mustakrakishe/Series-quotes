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

    public static function updateTotal()
    {
        Redis::set('api-total-requests', self::countTotalRequests());
    }

    public static function countTotalRequests() {
        return array_reduce(self::getKeysStartWith('api:users:'), function ($sum, $cacheCellKeyName) {
            return $sum + Redis::get($cacheCellKeyName);
        });
    }

    public static function getKeysStartWith(string $startWith) {
        return array_map(function ($key) {
            return str_replace(config('database.redis.options.prefix'), '', $key);
        }, Redis::keys("$startWith*"));
    }
}