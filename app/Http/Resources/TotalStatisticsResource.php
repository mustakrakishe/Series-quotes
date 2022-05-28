<?php

namespace App\Http\Resources;

class TotalStatisticsResource extends AppJsonResource
{
    public function toArray($request)
    {
        return [
            'request_total_amount' => $this->resource,
        ];
    }
}
