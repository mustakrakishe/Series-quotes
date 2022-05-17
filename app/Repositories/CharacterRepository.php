<?php

namespace App\Repositories;

use App\Models\Character;

class CharacterRepository
{
    public function getAll(int $perPage)
    {
        return Character::with(['episodes', 'quotes'])->paginate($perPage);
    }
    
    public function getFirstByName(string $name)
    {
        return Character::with(['episodes', 'quotes'])->whereRaw(
            'UPPER(name) = ?',
            [strtoupper($name)]
        )->firstOrFail();
    }

    public function getOneRandom()
    {
        return Character::with(['episodes', 'quotes'])->inRandomOrder()->first();
    }
}