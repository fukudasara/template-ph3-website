<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Choice;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Choice::create(
        Choice::create([
            'question_id' => 1,
            'text' => '約79万人',
            'is_correct' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 1,
            'text' => '約28万人',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 1,
            'text' => '約183万人',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 2,
            'text' => 'INTECH',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 2,
            'text' => 'BIZZTECH',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 2,
            'text' => 'X-TECH',
            'is_correct' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 3,
            'text' => 'Internet of Things',
            'is_correct' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 3,
            'text' => 'Information on Tool',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 3,
            'text' => 'Integrate into Technology',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 4,
            'text' => '22歳',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 4,
            'text' => '29歳',
            'is_correct' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 4,
            'text' => '36歳',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 5,
            'text' => 'ゴールデンレトリバー',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 5,
            'text' => 'ビーグル',
            'is_correct' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 5,
            'text' => 'ハウンド',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 6,
            'text' => 'ケビン',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 6,
            'text' => 'きなこ',
            'is_correct' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Choice::create([
            'question_id' => 6,
            'text' => 'ゆり',
            'is_correct' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // )
    }
}
