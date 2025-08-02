<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParagraphDetailResource;
use App\Models\Paragraph;
use Illuminate\Http\Request;

class ParagraphController extends Controller
{
    public function index(Request $request)
    {
        $paragraphs = Paragraph::with('questions')->where('level', $request->level)->get();

        return response()->json([
            'data' => ParagraphDetailResource::collection($paragraphs)
        ], 200);
    }
}
