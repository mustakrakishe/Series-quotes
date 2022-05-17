<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EpisodeResource extends JsonResource
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
            'title' => $this->title,
            'air_date' => $this->air_date,
            'characters' => CharacterResource::collection($this->characters),
        ];
    }
}
