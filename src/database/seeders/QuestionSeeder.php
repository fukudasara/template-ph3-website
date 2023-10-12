<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
            'supplement' => '補足情報...',
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Question::create([
            'image' => '/image/sample.jpg',
            'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
            'supplement' => '補足情報...',
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => 'IoTとは何の略でしょう？',
            'supplement' => '補足情報...',
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => '犬の最高齢ギネス記録は何歳でしょう？',
            'supplement' => '補足情報...',
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => 'スヌーピーの犬種はなんでしょう？',
            'supplement' => '補足情報...',
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => '天皇家の愛犬の名前はなんでしょう？',
            'supplement' => '補足情報...',
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
