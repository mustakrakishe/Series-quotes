<?php

namespace App\Repositories;

use App\Models\User;

class UserTokenRepository
{
    public function create(User $user, string $tokenName)
    {
        return $user->createToken($tokenName);
    }
}