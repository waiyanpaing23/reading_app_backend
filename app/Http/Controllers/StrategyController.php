<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParagraphDetailResource;
use App\Http\Resources\QuestionResource;
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

    public function skimmingPractice()
    {
        $paragraphs = $this->strategyService->getSkimmingParagraphs();
        return response()->json([
            'data' => ParagraphDetailResource::collection($paragraphs)
        ], 200);
    }

    public function scanningPractice()
    {
        $paragraphs = $this->strategyService->getScanningParagraphs();
        return response()->json([
            'data' => ParagraphDetailResource::collection($paragraphs)
        ], 200);
    }
}
