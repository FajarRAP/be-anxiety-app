<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Success retrieve quizzes',
            'data' => Quiz::all()->toResourceCollection(),
        ]);
    }
}
