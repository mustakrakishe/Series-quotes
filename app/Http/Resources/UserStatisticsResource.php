<?php

namespace App\Http\Resources;

class UserStatisticsResource extends AppJsonResource
{
    public function toArray($request)
    {
        return [
            'user' => $request->user()->name,
            'request_total_amount' => $this->resource,
        ];
    }
}
