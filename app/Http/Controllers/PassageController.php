<?php

namespace App\Http\Controllers;

use App\Models\Paragraph;
use App\Models\Passage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PassageController extends Controller
{
    public function index(Request $request)
    {
        $passages = Passage::with('paragraphs')->get();
        
        return response()->json([
            'data' => $passages
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'difficulty' => 'required',
            'paragraphs' => 'required|array',
            'paragraphs.*.content' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();
        try {
            $validated = $validator->validated();
            $passageData = collect($validated)->except('paragraphs')->toArray();
            $passage = Passage::create($passageData);

            foreach ($validated['paragraphs'] as $index => $para) {
                Paragraph::create([
                    'passage_id' => $passage->id,
                    'content' => $para['content'],
                    'order' => $index + 1
                ]);
            }

            DB::commit();
            $passage->load('paragraphs');
            return response()->json([
                'data' => $passage,
                'message' => "Passage created successfully"
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => $e->getMessage()
            ], 422);
        }
    }

    public function show($id)
    {
        $passage = Passage::with('paragraphs')->find($id);

        if (!$passage) {
            return response()->json([
                'error' => 'Passage not found'
            ], 404);
        }

        return response()->json([
            'data' => $passage
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'difficulty' => 'required',
            'paragraphs' => 'required|array',
            'paragraphs.*.content' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();
        try {
            $validated = $validator->validated();
            $passage = Passage::find($id);

            $passage->title = $validated['title'];
            $passage->difficulty = $validated['difficulty'];
            $passage->save();

            $existingIds = Paragraph::where('passage_id', $passage->id)->pluck('id')->toArray();
            $updatedIds = [];

            foreach($validated['paragraphs'] as $key => $para) {
                if (isset($para['id'])) {
                    $paragraph = Paragraph::find($para['id']);
                    $paragraph->content = $para['content'];
                    $paragraph->order = $key + 1;
                    $paragraph->save();
                    $updatedIds[] = $paragraph->id;
                } else {
                    $paragraph = Paragraph::create([
                        'passage_id' => $passage->id,
                        'content' => $para['content'],
                        'order' => $key + 1
                    ]);
                    $updatedIds[] = $paragraph->id;
                }
            }

            $deletedIds = array_diff($existingIds, $updatedIds);
            if (!empty($deletedIds)) {
                Paragraph::whereIn('id', $deletedIds)->delete();
            }

            DB::commit();
            $passage->load('paragraphs');

            return response()->json([
                'data' => $passage,
                'message' => "Passage updated successfully"
            ], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => $e->getMessage()
            ], 422);
        }
    }

    public function destroy($id)
    {
        $passage = Passage::find($id);

        if (!$passage) {
            return response()->json([
                'error' => 'Passage not found'
            ], 404);
        }

        $passage->delete();

        return response()->json([
            'message' => 'Passage deleted successfully!'
        ], 200);
    }

}
