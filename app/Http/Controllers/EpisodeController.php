<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaginationRequest;
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

    public function index(PaginationRequest $request)
    {
        return new EpisodeCollection(
            $this->repository->getAll($request->input('limit'))
        );
    }

    public function show(int $id)
    {
        return new EpisodeResource(
            $this->repository->getById($id)
        );
    }
}
