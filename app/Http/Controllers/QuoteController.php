<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaginationRequest;
use App\Http\Requests\QuoteGetOneByRandomByCharacterNameRequest;
use App\Http\Resources\QuoteCollection;
use App\Http\Resources\QuoteResource;
use App\Repositories\QuoteRepository;

class QuoteController extends Controller
{
    private $repository;

    public function __construct(QuoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(PaginationRequest $request)
    {
        return new QuoteCollection(
            $this->repository->getAll($request->input('limit'))
        );
    }

    public function getOneRandomByCharacterName(QuoteGetOneByRandomByCharacterNameRequest $request)
    {
        return new QuoteResource(
            $this->repository->getOneRandomByCharacterName($request->input('author'))
        );
    }
}
