<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    protected $fillable = [
        'passage_id',
        'content',
        'order',
        'alphabet',
        'level',
    ];

    public function passage()
    {
        return $this->belongsTo(Passage::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
