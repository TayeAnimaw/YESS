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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id('training_id');
            $table->string('title');
            $table->string('description');
            $table->string('target_audence');
            $table->string('trainer_name');
            $table->string('training_formal');
            $table->string('duration');
            $table->date('schedule');
            $table->double('fee');
            $table->string('is_certified');
            $table->string('status');
            $table->string('criteria');
            $table->string('pre_request');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
