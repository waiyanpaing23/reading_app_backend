<?php

namespace App\Services;

use App\Models\Question;

class QuestionService
{
    public function getQuestions()
    {
        return Question::with('options')->get();
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
        return Question::with(['paragraph', 'options'])->where('question_type_id', $id)->get();
    }
}
