<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'paragraph_id',
        'passage_id',
        'question_type_id',
        'content',
        'section',
        'strategy_id',
        'time_limit',
        'hints',
        'keywords',
    ];

    protected $casts = [
        'hints' => 'array',
        'keywords' => 'array',
    ];

    public function strategy()
    {
        return $this->belongsTo(Strategy::class);
    }

    public function paragraph()
    {
        return $this->belongsTo(Paragraph::class);
    }

    public function passage()
    {
        return $this->belongsTo(Passage::class);
    }

    public function questionType()
    {
        return $this->belongsTo(QuestionType::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
