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
        Schema::create('mentorships', function (Blueprint $table) {
            $table->id('mentorship_id');
            $table->unsignedBigInteger('member_id');
            $table->string('topic');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            // $table->timestamps();

            $table->foreign('member_id')->references('member_id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentorships');
    }
};
