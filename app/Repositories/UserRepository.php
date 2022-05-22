<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getById(int $id)
    {
        return User::findOrFail($id);
    }

    public function createToken(int $userId, string $tokenName)
    {
        return $this->getById($userId)->createToken($tokenName);
    }
}