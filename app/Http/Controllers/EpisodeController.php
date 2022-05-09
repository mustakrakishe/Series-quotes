<?php

namespace App\Http\Controllers;

use App\Http\Resources\EpisodeCollection;
use App\Http\Resources\EpisodeResource;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function index()
    {
        return new EpisodeCollection(
            Episode::with('characters')->get()
        );
    }

    public function show(int $id)
    {
        return new EpisodeResource(
            Episode::with('characters')->findOrFail($id)
        );
    }
}
