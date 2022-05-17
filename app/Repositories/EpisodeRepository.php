<?php

namespace App\Repositories;

use App\Models\Episode;

class EpisodeRepository
{
    public function getAll(?int $perPage)
    {
        return Episode::with('characters')->paginate($perPage);
    }
    
    public function getById(int $id)
    {
        return Episode::with('characters')->findOrFail($id);
    }
}