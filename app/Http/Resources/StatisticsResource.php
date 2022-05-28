<?php

namespace App\Http\Resources;

class StatisticsResource extends AppJsonResource
{
    public function toArray($request)
    {
        return [
            'user' => $request->user()->name,
            'request_total_amount' => $this->resource,
        ];
    }
}
