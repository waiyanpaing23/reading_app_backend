<?php

namespace App\Http\Controllers;

use App\Services\QuestionService;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{

    protected $questionService;

    public function __construct(QuestionService $questionService)
    {
        $this->questionService = $questionService;
    }

    public function index(Request $request)
    {
        $questions = $this->questionService->getQuestions();

        return response()->json([
            'data' => $questions
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paragraph_id' => 'required_without:passage_id',
            'passage_id' => 'required_without:paragraph_id',
            'question_type_id' => 'required',
            'content' => 'required',
            'options' => 'required|array',
            'options.*.content' => 'required',
            'options.*.is_correct' => 'required|boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 422);
        }

        try {
            DB::beginTransaction();

            $question = Question::create($request->only([
                'paragraph_id',
                'passage_id',
                'question_type_id',
                'content',
                'section'
            ]));

            foreach ($request->options as $option) {
                $question->options()->create([
                    'content' => $option['content'],
                    'is_correct' => $option['is_correct']
                ]);
            }

            DB::commit();

            $question->load('options');

            return response()->json([
                'data' => $question,
                'message' => 'Question created successfully'
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'error' => $e->getMessage()
            ], 422);
        }
    }

    public function getByPassageId($id)
    {
        $questions = $this->questionService->getByPassageId($id);

        if (!$questions) {
            return response()->json([
                'error' => 'Questions not found'
            ], 404);
        }
        return response()->json([
            'data' => $questions
        ], 200);
    }

    public function getByParagraphId($id)
    {
        $questions = $this->questionService->getByParagraphId($id);

        if (!$questions) {
            return response()->json([
                'error' => 'Questions not found'
            ], 404);
        }
        return response()->json([
            'data' => $questions
        ], 200);
    }

    public function getByQuestionType($id)
    {
        $questions = $this->questionService->getByQuestionTypeId($id);

        if (!$questions) {
            return response()->json([
                'error' => 'Questions not found'
            ], 404);
        }
        return response()->json([
            'data' => $questions
        ], 200);
    }

    public function getByStrategyId($id)
    {
        $questions = $this->questionService->getByStrategyId($id);

        if (!$questions) {
            return response()->json([
                'error' => 'Questions not found'
            ], 404);
        }
        return response()->json([
            'data' => $questions
        ], 200);
    }
}
