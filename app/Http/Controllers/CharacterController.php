<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharacterCollection;
use App\Http\Resources\CharacterResource;
use App\Http\Requests\CharacterGetByNameRequest;
use App\Repositories\CharacterRepository;

class CharacterController extends Controller
{
    private $repository;

    public function __construct(CharacterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(CharacterGetByNameRequest $request)
    {
        if ($name = $request->validated('name')) {
            return new CharacterResource($this->repository->getFirstByName($name));
        }
        
        return new CharacterCollection($this->repository->getAll());
    }
}
