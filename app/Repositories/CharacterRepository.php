<?php

namespace App\Repositories;

use App\Exceptions\Character\CharacterByNameNotFoundException;
use App\Exceptions\Character\CharacterRandomNotFoundException;
use App\Models\Character;

class CharacterRepository
{
    public function getAll(int $perPage = null, int $page = null)
    {
        return Character::with(['episodes', 'quotes'])->paginate($perPage, ['*'], 'page', $page);
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
        $character = Character::with(['episodes', 'quotes'])
            ->inRandomOrder()
            ->first();

        if ($character) {
            return $character;
        }

        throw new CharacterRandomNotFoundException();
    }
}