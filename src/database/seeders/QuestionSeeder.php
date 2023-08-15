<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追加

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // ITクイズの問題を作成
        $itQuizId = DB::table('quizzes')->where('name', 'ITクイズ')->value('id');

        DB::table('questions')->insert([
            [
                'image' => '/image/sample.jpg',
                'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
                'supplement' => '補足情報...',
                'quiz_id' => $itQuizId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/image/sample.jpg',
                'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
                'supplement' => '補足情報...',
                'quiz_id' => $itQuizId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/image/sample.jpg',
                'text' => 'IoTとは何の略でしょう？',
                'supplement' => '補足情報...',
                'quiz_id' => $itQuizId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // 犬クイズの問題を作成
        $dogQuizId = DB::table('quizzes')->where('name', '犬クイズ')->value('id');

        DB::table('questions')->insert([
            [
                'image' => '/image/sample.jpg',
                'text' => '犬の嗅覚はヒトの何倍でしょうか？',
                'supplement' => '補足情報...',
                'quiz_id' => $dogQuizId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/image/sample.jpg',
                'text' => '世界で最も小さな犬種は何でしょう？',
                'supplement' => '補足情報...',
                'quiz_id' => $dogQuizId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/image/sample.jpg',
                'text' => '世界で最も大きな犬種は何でしょう？',
                'supplement' => '補足情報...',
                'quiz_id' => $dogQuizId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
