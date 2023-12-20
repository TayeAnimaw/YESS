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
        Schema::create('funding_requests', function (Blueprint $table) {
            $table->id('request_id');
            $table->string('title');
            $table->string('status');
            $table->text('description');
            $table->decimal('amount_needed', 8, 2);
            $table->unsignedBigInteger('user_id');
            // $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funding_requests');
    }
};
