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

            Schema::create('volunteer_applications', function (Blueprint $table) {
                $table->id('application_id');
                $table->unsignedBigInteger('volunteer_id');
                $table->unsignedBigInteger('user_id');
                $table->string('status');
                // $table->timestamps();

                $table->foreign('volunteer_id')->references('volunteer_id')->on('volunteers');
                $table->foreign('user_id')->references('user_id')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_applications');
    }
};
