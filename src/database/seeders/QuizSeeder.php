<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            'name' => 'ITクイズ',
        ]);
        Quiz::create([
            'name' => '犬クイズ',
        ]);
        for ($i = 1; $i <= 100; $i++) {
            Quiz::create([
                'name' => 'クイズ ' . $i,
            ]);
        }
    }
}
