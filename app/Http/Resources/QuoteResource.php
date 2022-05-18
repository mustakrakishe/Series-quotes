<?php

namespace App\Http\Resources;

class QuoteResource extends AppJsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'quote' => $this->quote,
            'character' => new CharacterResource($this->character),
            'episode' => new EpisodeResource($this->episode),
        ];
    }
}
