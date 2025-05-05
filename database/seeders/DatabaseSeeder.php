<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'test',
            'password' => bcrypt('password'),
        ]);

        DB::table('profiles')->insert(['user_id' => $user->id]);

        $this->call([
            QuizTypeSeeder::class,
            QuizSeeder::class,
        ]);
    }
}
