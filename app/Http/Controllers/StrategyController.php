<?php

namespace App\Http\Controllers;

use App\Services\StrategyService;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    protected $strategyService;
    public function __construct(StrategyService $strategyService)
    {
        $this->strategyService = $strategyService;
    }

    public function index()
    {
        $strategies = $this->strategyService->getStrategies();
        return response()->json([
            'data' => $strategies
        ], 200);
    }
}
