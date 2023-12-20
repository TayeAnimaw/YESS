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
        Schema::create('training_enrollments', function (Blueprint $table) {
            $table->id('enrollment_id');
            $table->unsignedBigInteger('training_id');
            $table->string('progress');
            $table->string('status');
            // $table->timestamps();
            $table->foreign('training_id')->references('training_id')->on('trainings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_enrollments');
    }
};
