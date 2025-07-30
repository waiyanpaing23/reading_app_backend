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
            $table->foreignId('paragraph_id')->nullable()->constrained('paragraphs')->onDelete('cascade');
            $table->foreignId('passage_id')->nullable()->constrained('passages')->onDelete('cascade');
            $table->foreignId('question_type_id')->constrained('question_types')->onDelete('cascade');
            $table->text('content');
            $table->integer('section')->nullable();
            $table->timestamps();
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
