<?php

namespace App\Http\Resources;

class EpisodeResource extends AppJsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'air_date' => $this->air_date,
            'characters' => CharacterResource::collection($this->characters),
        ];
    }
}
