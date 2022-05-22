<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    protected static function booted()
    {
        static::addGlobalScope('orderByScope', function (Builder $builder) {
            $builder->orderByDesc('created_at');
        });
    }
}
