<?php

namespace App\Repositories;

use App\Models\Character;

class CharacterRepository
{
    public function getAll()
    {
        return Character::all();
    }
    
    public function getFirstByName(string $name)
    {
        return Character::whereRaw(
            'UPPER(name) = ?',
            [strtoupper($name)]
        )->firstOrFail();
    }
}