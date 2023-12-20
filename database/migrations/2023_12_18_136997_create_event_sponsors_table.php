<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('event_sponsors', function (Blueprint $table) {
            $table->id('sponsor_id');
            $table->string('sponsor_level');
            $table->string('sponsorship_type');
            $table->text('description');
            $table->unsignedBigInteger('partner_id');
            // $table->timestamps();
            $table->foreign('partner_id')->references('partner_id')->on('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('event_sponsors');
    }
};
