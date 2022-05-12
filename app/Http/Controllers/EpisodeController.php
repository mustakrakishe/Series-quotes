<?php

namespace App\Http\Controllers;

use App\Http\Resources\EpisodeCollection;
use App\Http\Resources\EpisodeResource;
use App\Repositories\EpisodeRepository;

class EpisodeController extends Controller
{
    private $repository;

    public function __construct(EpisodeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return new EpisodeCollection(
            $this->repository->getAll()
        );
    }

    public function show(int $id)
    {
        return new EpisodeResource(
            $this->repository->getById($id)
        );
    }
}
