<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('image')->comment('設問画像 ex.) /image/sample.jpg')->nullable();
            $table->string('text')->comment('設問 ex.) 日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？');
            $table->string('supplement')->nullable()->comment('設問補足');
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade'); // Foreign key
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
        
        
    }
};