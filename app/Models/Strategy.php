<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    protected $fillable = [
        'title',
        'key_points'
    ];

    protected $casts = [
        'key_points' => 'array'
    ];
}
