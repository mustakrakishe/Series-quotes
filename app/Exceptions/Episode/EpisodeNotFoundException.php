<?php

namespace App\Exceptions\Episode;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class EpisodeNotFoundException extends ModelNotFoundException
{
    public function setId($id)
    {
        $this->message = "Episode #$id does no exist.";

        return $this;
    }
}