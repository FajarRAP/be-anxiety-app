<?php

namespace Database\Seeders;

use App\Models\QuizType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = collect([
            ['type' => 'Hamilton Anxiety Rating Scale (HARS)'],
            ['type' => 'Multidimensional Scale of Perceivced Social Support (MSPSS)'],
            ['type' => 'Quality of Life'],
        ]);

        $datas->each(fn($data) => QuizType::create($data));
    }
}
