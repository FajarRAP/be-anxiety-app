<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizType extends Model
{
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
