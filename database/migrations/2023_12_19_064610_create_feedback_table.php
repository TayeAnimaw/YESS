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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            $table->unsignedBigInteger('user_id');
            $table->text('message');
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('resource_id');

            // $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('event_id')->references('event_id')->on('event_programs');
            $table->foreign('resource_id')->references('resource_id')->on('resources');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
