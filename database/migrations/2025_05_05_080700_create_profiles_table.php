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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->enum('genders', ['MALE', 'FEMALE'])->nullable();
            $table->enum('education', ['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3', 'NONE'])->nullable();
            $table->string('occupation')->nullable();
            $table->enum('marriage', ['KAWIN', 'BELUM KAWIN', 'CERAI HIDUP', 'CERAI MATI'])->nullable();
            $table->string('duration')->nullable();
            $table->string('history')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
