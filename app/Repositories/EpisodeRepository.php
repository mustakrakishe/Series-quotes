<?php

namespace App\Repositories;

use App\Models\Episode;

class EpisodeRepository
{
    public function getAll()
    {
        return Episode::with('characters')->get();
    }
    
    public function getById(int $id)
    {
        return Episode::with('characters')->findOrFail($id);
    }
}