<?php

namespace App\Repositories;

use App\Exceptions\Episode\EpisodeNotFoundException;
use App\Models\Episode;

class EpisodeRepository
{
    public function getAll(?int $perPage)
    {
        return Episode::with('characters')->paginate($perPage);
    }
    
    public function getById(int $id)
    {
        if ($episode = Episode::with('characters')->find($id)) {
            return $episode;
        }
        
        throw (new EpisodeNotFoundException)->setId($id);
    }
}