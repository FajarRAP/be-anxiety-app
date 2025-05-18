<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizType;

class QuizController extends Controller
{
    public function index()
    {
        $quizTypes = QuizType::all();
        $quizzes = Quiz::all()->toResourceCollection()->collection->groupBy('quiz_type_id');

        $mapQuizzes = fn($quizzes) => $quizzes->map(fn($quiz) =>
        [
            'id' => $quiz->id,
            'question' => $quiz->question,
        ])->values();

        $often = $quizzes->get($quizTypes[2]->id)->splice(7);

        return response()->json([
            'message' => 'Success retrieve quizzes',
            'data' => [
                [
                    'quiz_type' => [
                        'id' => $quizTypes[0]->id,
                        'name' => 'HARS',
                    ],
                    'quizzes' => $quizzes->get($quizTypes[0]->id)->groupBy('title')->map(fn($group, $title) => [
                        'title' => $title,
                        'questions' => $mapQuizzes($group),
                    ])->values(),
                ],
                [
                    'quiz_type' => [
                        'id' => $quizTypes[1]->id,
                        'name' => 'MSPSS',
                    ],
                    'quizzes' => $mapQuizzes($quizzes->get($quizTypes[1]->id)),
                ],
                [
                    'quiz_type' => [
                        'id' => $quizTypes[2]->id,
                        'name' => 'DQoL',
                    ],
                    'quizzes' => [
                        [
                            'type' => 'satisfcation',
                            'questions' => $mapQuizzes($quizzes->get($quizTypes[2]->id)),
                        ],
                        [
                            'type' => 'often',
                            'questions' => $mapQuizzes($often),
                        ],
                    ],
                ],
            ],
        ]);
    }
}
