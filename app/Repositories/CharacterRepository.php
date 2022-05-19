<?php

namespace App\Repositories;

use App\Exceptions\Character\CharacterByNameNotFoundException;
use App\Models\Character;

class CharacterRepository
{
    public function getAll(?int $perPage)
    {
        return Character::with(['episodes', 'quotes'])->paginate($perPage);
    }
    
    public function getFirstByName(string $name)
    {
        $character = Character::with(['episodes', 'quotes'])
            ->whereRaw('UPPER(name) = ?', [strtoupper($name)])
            ->first();

        if ($character) {
            return $character;
        }

        throw (new CharacterByNameNotFoundException)->setName($name);
    }

    public function getOneRandom()
    {
        return Character::with(['episodes', 'quotes'])
            ->inRandomOrder()
            ->firstOrFail();
    }
}