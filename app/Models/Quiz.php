<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasUuids;

    public function quizType()
    {
        return $this->belongsTo(QuizType::class);
    }
}
