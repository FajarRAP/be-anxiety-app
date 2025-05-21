<?php

namespace App\Http\Controllers;

use App\Models\QuizHistory;
use App\Models\QuizType;
use Illuminate\Http\Request;

class QuizHistoryController extends Controller
{
    public function index(Request $request)
    {
        $histories = $request->user()->quizHistories->groupBy('session')->values();
        $mappedHistories = $histories->map(
            fn($quizzes) => [
                'created_at' => $quizzes->first()->created_at,
                'user' => $quizzes->first()->user->toResource(),
                'results' => collect($quizzes)->map(fn($item, $key) => [
                    'id' => $item->id,
                    'quiz_type' => $item->quizType->toResource(),
                    'score' => $item->score,
                    'material' => $item->material,
                    ...$this->evaluateStatus($item, $key)
                ])
            ],
        );

        return response()->json([
            'message' => 'Success retrieve quiz history',
            'data' => $mappedHistories->sortByDesc('created_at')->values(),
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
                => $carry + $item, 0);
            $result = QuizHistory::create([
                'session' => $quizSession,
                'user_id' => $request->user()->id,
                'quiz_type_id' => $data['quiz_type_id'],
                'score' => round($data['quiz_type_id'] == $quizTypes[1]->id ? $score / 12 : $score, 2),
                'material' => 'https://studyatsac.com/',
            ]);

            $results->push($result);
        }

        return response()->json([
            'message' => 'Success calculate quiz score',
            'data' => [
                'created_at' => $now,
                'user' => $request->user()->toResource(),
                'results' => $results->map(fn($item, $key) => [
                    'id' => $item->id,
                    'quiz_type' => $item->quizType->toResource(),
                    'score' => $item->score,
                    'material' => $item->material,
                    ...$this->evaluateStatus($item, $key),
                ])
            ],
        ], 201);
    }

    private function evaluateStatus($item, $key)
    {
        return match ($key) {
            0 => $item->score < 14 ? ['status' => 'Tidak Ansietas', 'image_path' => 'happykiyowo.png']
                : ($item->score < 20 ? ['status' => 'Ringan', 'image_path' => 'ringan.png']
                    : ($item->score < 27 ? ['status' => 'Sedang', 'image_path' => 'sedang.png']
                        : ($item->score < 41 ? ['status' => 'Berat', 'image_path' => 'berat.png']
                            : ['status' => 'Sangat Berat', 'image_path' => 'stress.png']))),
            1 => $item->score >= 1.0 && $item->score < 3.0 ? ['status' => 'Dukungan Sosial Rendah', 'image_path' => 'berat.png']
                : ($item->score >= 3.0 && $item->score < 5.0 ? ['status' => 'Dukungan Sosial Sedang', 'image_path' => 'sedang.png']
                    : ['status' => 'Dukungan Sosial Sangat Tinggi', 'image_path' => 'happykiyowo.png']),
            2 => $item->score < 45 ? ['status' => 'Baik', 'image_path' => 'happykiyowo.png'] : ['status' => 'Kurang Baik', 'image_path' => 'berat.png'],
        };
    }
}
