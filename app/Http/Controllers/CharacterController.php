<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharacterCollection;
use App\Http\Resources\CharacterResource;
use App\Http\Requests\CharacterGetByNameRequest;
use App\Http\Requests\PaginationRequest;
use App\Models\Character;
use App\Repositories\CharacterRepository;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    private $repository;

    public function __construct(CharacterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        if ($request->has('name')) {
            $getByNameRequest = new CharacterGetByNameRequest($request->all());

            $getByNameRequest->validate($getByNameRequest->rules());

            return $this->getOneByName($getByNameRequest);
        }

        $getAllRequest = new PaginationRequest($request->all());
        
        $getAllRequest->validate($getAllRequest->rules());
        
        return $this->getAll($getAllRequest);
    }

    public function getAll(PaginationRequest $request)
    {
        return new CharacterCollection(
            $this->repository->getAll($request->input('limit'))
        );
    }

    public function getOneByName(CharacterGetByNameRequest $request)
    {
        return new CharacterResource(
            $this->repository->getFirstByName($request->input('name'))
        );
    }

    public function getOneRandom()
    {
        return new CharacterResource($this->repository->getOneRandom());
    }
}
