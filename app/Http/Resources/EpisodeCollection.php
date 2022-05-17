<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EpisodeCollection extends ResourceCollection
{
    public $with = [
        'success' => true,
    ];
    
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = EpisodeResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
    }
}
