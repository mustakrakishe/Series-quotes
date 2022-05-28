<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class ApiRequestHit
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $user;
    protected $time;
    
    public function __construct(Authenticatable $user)
    {
        $this->user = $user;
        $this->time = now();
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getUser()
    {
        return $this->user;
    }
}
