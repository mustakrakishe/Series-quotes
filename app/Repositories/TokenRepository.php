<?php

namespace App\Repositories;

use Laravel\Sanctum\PersonalAccessToken;

class TokenRepository
{
    public function destroy(int $id)
    {
        return PersonalAccessToken::findOrFail($id)->delete();
    }
}