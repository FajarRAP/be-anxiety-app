<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizHistory extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quizType()
    {
        return $this->belongsTo(QuizType::class);
    }
}
