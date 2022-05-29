<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharacterCollection;
use App\Http\Resources\CharacterResource;
use App\Http\Requests\CharacterGetByNameRequest;
use App\Http\Requests\PaginationRequest;
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

            return new CharacterResource(
                $this->repository->getFirstByName($getByNameRequest->input('name'))
            );
        }

        $getAllRequest = new PaginationRequest($request->all());
        
        $getAllRequest->validate($getAllRequest->rules());
        
        return new CharacterCollection(
            $this->repository->getAll($getAllRequest->input('limit'), $getAllRequest->input('page'))
        );
    }

    public function getOneRandom()
    {
        return new CharacterResource($this->repository->getOneRandom());
    }
}
