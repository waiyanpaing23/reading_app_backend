<?php

namespace App\Services;

use App\Models\Strategy;

class StrategyService
{
    public function getStrategies()
    {
        return Strategy::all();
    }
}
