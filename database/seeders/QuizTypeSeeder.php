<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quiz_types')->insert([
            ['type' => 'Hamilton Anxiety Rating Scale (HARS)'],
            ['type' => 'Multidimensional Scale of Perceivced Social Support (MSPSS)'],
            ['type' => 'Quality of Life'],
        ]);
    }
}
