<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function quizType()
    {
        return $this->belongsTo(QuizType::class);
    }
}
