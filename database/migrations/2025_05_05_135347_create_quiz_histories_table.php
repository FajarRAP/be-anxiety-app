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
        Schema::create('quiz_histories', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('session');
            $table->foreignUuid('user_id')
                ->constrained(table: 'users', column: 'id', indexName: 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignUuid('quiz_type_id')
                ->constrained(table: 'quiz_types', column: 'id', indexName: 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->float('score');
            $table->string('material');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_histories');
    }
};
