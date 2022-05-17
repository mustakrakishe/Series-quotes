<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
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
            'name' => $this->name,
            'birthday' => $this->birthday,
            'occupations' => $this->occupations,
            'img' => $this->img,
            'nickname' => $this->nickname,
            'portrayed' => $this->portrayed,
            'episode_ids' => $this->episodes->pluck('id'),
            'qoute_ids' => $this->quotes->pluck('id'),
        ];
    }
}
