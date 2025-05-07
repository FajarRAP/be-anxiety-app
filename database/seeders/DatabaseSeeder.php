<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        Profile::create([
            'user_id' => $user->id,
        ]);

        $this->call([
            QuizTypeSeeder::class,
            QuizSeeder::class,
        ]);
    }
}
