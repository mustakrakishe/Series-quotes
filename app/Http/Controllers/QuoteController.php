<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuoteCollection;
use App\Repositories\QuoteRepository;

class QuoteController extends Controller
{
    private $repository;

    public function __construct(QuoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return new QuoteCollection(
            $this->repository->getAll()
        );
    }
}
