<?php

namespace App\Http\Controllers;

use App\Models\QuizHistory;
use App\Models\QuizType;
use Illuminate\Http\Request;

class QuizHistoryController extends Controller
{
    public function index(Request $request)
    {
        $histories = $request->user()->quizHistories()->get()->groupBy('session')->values();

        return response()->json([
            'message' => 'Success retrieve quiz history',
            'data' => $histories->map(
                fn($quizzes) =>
                [
                    'created_at' => $quizzes->first()->created_at,
                    'user' => $quizzes->first()->user->toResource(),
                    'results' => collect($quizzes)->map(fn($item) => [
                        'id' => $item->id,
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
        $payload = collect($request->all());
        $quizSession = bcrypt($request->user()->id . now());

        $results = collect([]);
        foreach ($payload as $key => $data) {

            $score = collect($data['values'])
                ->reduce(fn($carry, $item)
                => $carry + ($key == 0 ? $item : $item + 1), 0);
            $result = QuizHistory::create([
                'session' => $quizSession,
                'user_id' => $request->user()->id,
                'quiz_type_id' => $data['quiz_type_id'],
                'score' => $data['quiz_type_id'] == $quizTypes[1]->id ? $score / 12 : $score,
                'material' => 'https://studyatsac.com/',
            ]);

            $results->push($result);
        }

        return response()->json([
            'message' => 'Success calculate quiz score',
            'data' => [
                'created_at' => $now,
                'user' => $request->user()->toResource(),
                'results' => $results->map(fn($item) => [
                    'id' => $item->id,
                    'quiz_type' => $item->quizType->toResource(),
                    'score' => $item->score,
                    'material' => $item->material,
                ])
            ],
        ], 201);
    }
}
