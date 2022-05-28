<?php

namespace App\Http\Controllers;

use App\Http\Resources\TotalStatisticsResource;
use App\Http\Resources\UserStatisticsResource;
use App\Repositories\StatisticsRepository;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    protected $repository;

    public function __construct(StatisticsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getTotalStatistics(Request $request)
    {
        return new TotalStatisticsResource($this->repository->getTotal());
    }

    public function getUserStatistics(Request $request)
    {
        return new UserStatisticsResource($this->repository->getByUserId($request->user()->id));
    }
}
