<?php

namespace App\Repositories;

use App\Models\PersonalAccessToken;

class TokenRepository
{
    public function destroy(int $id)
    {
        return PersonalAccessToken::findOrFail($id)->delete();
    }
}