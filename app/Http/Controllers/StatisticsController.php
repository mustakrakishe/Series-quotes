<?php

namespace App\Http\Controllers;

use App\Repositories\StatisticsRepository;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    protected $repository;

    public function __construct(StatisticsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getUserStatistics(Request $request)
    {
        return $this->repository->getByUserId($request->user()->id);
    }
}
