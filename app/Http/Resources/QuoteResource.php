<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuoteResource extends JsonResource
{
    public $with = [
        'success' => true,
    ];
    
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
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
