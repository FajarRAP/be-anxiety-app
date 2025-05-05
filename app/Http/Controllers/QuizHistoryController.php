<?php

namespace App\Http\Controllers;

use App\Models\QuizHistory;
use App\Models\QuizType;
use Illuminate\Http\Request;

class QuizHistoryController extends Controller
{
    public function index()
    {
        $histories = QuizHistory::all()->groupBy('session')->values();

        return response()->json([
            'message' => 'Success retrieve quiz history',
            'data' => $histories->map(
                fn($quizzes) =>
                [
                    'created_at' => $quizzes->first()->created_at,
                    'result' => collect($quizzes)->map(fn($item) => [
                        'id' => $item->id,
                        'user' => $item->user->toResource(),
                        'quiz_type' => $item->quizType->toResource(),
                        'score' => $item->score,
                        'material' => $item->material,
                    ])
                ],
            ),
        ]);
    }
    public function store(Request $request)
    {
        $now = now();
        $quizTypes = QuizType::all();
        $quizzes = collect($request->input('quizzes'));
        $quizSession = bcrypt($request->user()->id . now());

        $histories = collect([]);
        foreach ($quizTypes as $quizType) {
            $score = $quizzes
                ->filter(fn($item) => $item['quiz_type_id'] == $quizType->id)
                ->reduce(fn(int $carry, $item): float => $carry + $item['answer'], 0);

            $history = QuizHistory::create([
                'session' => $quizSession,
                'user_id' => $request->user()->id,
                'quiz_type_id' => $quizType->id,
                'score' => $quizType->id == 1 ?
                    $score / 14 : ($quizType->id == 2 ? $score / 12 : $score),
                'material' => 'https://studyatsac.com/',
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $histories->push($history);
        }

        return response()->json([
            'message' => 'Success calculate quiz score',
            'data' => $histories,
        ], 201);
    }
}
