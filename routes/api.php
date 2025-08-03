<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PassageController;
use App\Http\Controllers\ParagraphController;
use App\Http\Controllers\StrategyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Question Routes
Route::get('/questions/paragraph/{id}', [QuestionController::class, 'getByParagraphId']);
Route::get('questions/passage/{id}', [QuestionController::class, 'getByPassageId']);
Route::get('/questions/type/{id}', [QuestionController::class, 'getByQuestionType']);

// Passage Routes
Route::post('/passages', [PassageController::class, 'store']);
Route::get('/passages/{id}', [PassageController::class, 'show']);
Route::put('/passages/{id}', [PassageController::class, 'update']);
Route::delete('/passages/{id}', [PassageController::class, 'destroy']);

// Paragraph Routes
Route::get('/paragraphs', [ParagraphController::class, 'index']);
Route::get('/strategies', [StrategyController::class, 'index']);
Route::get('/strategies/skimming', [StrategyController::class, 'skimmingPractice']);
Route::get('/strategies/scanning', [StrategyController::class, 'scanningPractice']);
