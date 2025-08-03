<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'paragraph_id' => $this->paragraph_id,
            'question_type_id' => $this->question_type_id,
            'content' => $this->content,
            'section' => $this->section,
            'time_limit' => $this->time_limit,
            'hints' => $this->hints,
            'keywords' => $this->keywords,
            'options' => OptionResource::collection(json_decode($this->options)),
        ];
    }
}
