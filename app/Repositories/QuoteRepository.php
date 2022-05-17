<?php

namespace App\Repositories;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Builder;

class QuoteRepository
{
    public function getAll(?int $perPage)
    {
        return Quote::with(['character', 'episode'])->paginate($perPage);
    }

    public function getOneRandomByCharacterName(string $name)
    {
        return Quote::with(['character', 'episode'])->whereHas('character', function (Builder $query) use ($name) {
            $query->whereName($name);
        })->inRandomOrder()->first();
    }
}