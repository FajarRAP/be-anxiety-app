<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class QuizType extends Model
{
    use HasUuids;

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function quizHistories()
    {
        return $this->hasMany(QuizHistory::class);
    }
}
