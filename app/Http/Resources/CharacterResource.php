<?php

namespace App\Http\Resources;

class CharacterResource extends AppJsonResource
{
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
