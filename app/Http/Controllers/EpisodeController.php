<?php

namespace App\Http\Controllers;

use App\Http\Resources\EpisodeCpollection;
use App\Http\Resources\EpisodeResource;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function index()
    {
        return new EpisodeCpollection(Episode::all());
    }

    public function show(int $id)
    {
        return new EpisodeResource(Episode::findOrFail($id));
    }
}
