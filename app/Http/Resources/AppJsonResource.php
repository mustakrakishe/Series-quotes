<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppJsonResource extends JsonResource
{
    public $with = [
        'success' => true,
    ];
}
