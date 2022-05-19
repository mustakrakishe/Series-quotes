<?php

namespace App\Repositories;

use App\Exceptions\Quote\QuoteRandomByCharacterNameNotFound;
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
        $quote = Quote::with(['character', 'episode'])
            ->whereHas('character', function (Builder $query) use ($name) {
                $query->whereRaw('UPPER(name) = ?', [strtoupper($name)]);
            })
            ->inRandomOrder()
            ->first();
        
        if ($quote) {
            return $quote;
        }

        throw (new QuoteRandomByCharacterNameNotFound)->setName($name);
    }
}