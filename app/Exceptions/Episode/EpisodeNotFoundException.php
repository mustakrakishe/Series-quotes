<?php

namespace App\Exceptions\Episode;

use App\Exceptions\AppModelNotFoundException;

class EpisodeNotFoundException extends AppModelNotFoundException
{
    protected $entityName = 'Episode';
}