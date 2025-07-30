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
        Schema::table('questions', function (Blueprint $table) {
            $table->foreignId('strategy_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('time_limit')->nullable();
            $table->string('hints', 255)->nullable();
            $table->json('keywords')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['strategy_id']);
            $table->dropColumn('strategy_id');
            $table->dropColumn('time_limit');
            $table->dropColumn('hints');
            $table->dropColumn('keywords');
        });
    }
};
