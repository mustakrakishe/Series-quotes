<?php

namespace App\Repositories;

use App\Models\Quote;

class QuoteRepository
{
    public function getAll()
    {
        return Quote::with(['character', 'episode'])->get();
    }
}