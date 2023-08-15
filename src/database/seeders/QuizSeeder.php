<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // 既存のレコードを削除
        DB::table('quizzes')->delete();

        // 新しいダミーデータを挿入
        DB::table('quizzes')->insert([
            [
                'name' => 'ITクイズ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '犬クイズ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('quizzes')->where('name', '歴史クイズ')->delete();
    }
}
