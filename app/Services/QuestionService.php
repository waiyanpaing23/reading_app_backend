<?php

namespace App\Services;

use App\Models\Paragraph;
use App\Models\Question;

class QuestionService
{
    public function getQuestions()
    {
        return Paragraph::with('questions')->get();
    }

    public function getByPassageId($id)
    {
        return Question::with('options')->where('passage_id', $id)->get();
    }

    public function getByStrategyId($id)
    {
        return Question::with('options')->where('strategy_id', $id)->get();
    }

    public function getByParagraphId($id)
    {
        return Question::with('options')->where('paragraph_id', $id)->get();
    }

    public function getByQuestionTypeId($id)
    {
        $paragraphs = Paragraph::with(['questions' => function ($query) use ($id) {
            $query->where('question_type_id', $id);
        }])
        ->whereHas('questions', function ($query) use ($id) {
            $query->where('question_type_id', $id);
        })
        ->inRandomOrder()
        ->limit(10)
        ->get();

        return $paragraphs;
    }
}
