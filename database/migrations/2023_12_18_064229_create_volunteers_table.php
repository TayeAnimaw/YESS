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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id('volunteer_id');
            $table->string('title');
            $table->text('description');
            $table->string('target_community');
            $table->string('status');
            $table->string('duration');
            $table->string('location');
            $table->string('activity_type');
            $table->string('age_group');
            $table->unsignedBigInteger('partner_id');
            $table->string('contact_info');
            $table->date('start_date');
            $table->date('end_date');
            // $table->timestamps();

            $table->foreign('partner_id')->references('partner_id')->on('partners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
