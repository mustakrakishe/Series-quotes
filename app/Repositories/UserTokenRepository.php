<?php

namespace App\Repositories;

use App\Models\User;

class UserTokenRepository
{
    public function create(User $user, string $tokenName)
    {
        $token = $user->createToken($tokenName);
        
        return $token->plainTextToken;
    }
}