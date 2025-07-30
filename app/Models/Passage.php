<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passage extends Model
{
    protected $fillable = [
        'title',
    ];

    public function paragraphs()
    {
        return $this->hasMany(Paragraph::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
