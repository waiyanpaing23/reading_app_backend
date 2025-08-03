<?php

namespace App\Services;

use App\Models\Paragraph;
use App\Models\Strategy;
use App\Models\Question;

class StrategyService
{
    public function getStrategies()
    {
        return Strategy::all();
    }

    public function getSkimmingParagraphs()
    {
        $paragraphs = Paragraph::with(['questions' => function ($query) {
            $query->where('strategy_id', 1)
                ->where('note', 'skimming');
        }])
        ->whereHas('questions', function ($query) {
            $query->where('strategy_id', 1)
                ->where('note', 'skimming');
        })
        ->inRandomOrder()
        ->limit(5)
        ->get();
        return $paragraphs;
    }

    public function getScanningParagraphs()
    {
        $paragraphs = Paragraph::with(['questions' => function ($query) {
            $query->where('strategy_id', 1)
                ->where('note', 'scanning');
        }])
        ->whereHas('questions', function ($query) {
            $query->where('strategy_id', 1)
                ->where('note', 'scanning');
        })
        ->inRandomOrder()
        ->limit(5)
        ->get();
        return $paragraphs;
    }
}
