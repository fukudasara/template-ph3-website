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
        // Create quizzes table if it doesn't exist
        
            Schema::create('quizzes', function (Blueprint $table) {
                $table->id();
                $table->string('name')->comment('カテゴライズしたクイズ名 ex.) ITクイズ');
                $table->timestamps();

                $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop quizzes table only if it exists
            Schema::dropIfExists('quizzes');
    }
};
