<?php

namespace App\Repositories;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Builder;

class QuoteRepository
{
    public function getAll()
    {
        return Quote::with(['character', 'episode'])->get();
    }

    public function getOneRandomByCharacterName(string $name)
    {
        return Quote::with(['character', 'episode'])->whereHas('character', function (Builder $query) use ($name) {
            $query->whereName($name);
        })->inRandomOrder()->first();
    }
}