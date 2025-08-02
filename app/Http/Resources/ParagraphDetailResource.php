<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParagraphDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'passage_id' => $this->passage_id,
            'content' => $this->content,
            'order' => $this->order,
            'level' => $this->level,
            'questions' => QuestionResource::collection($this->questions),
        ];
    }
}
