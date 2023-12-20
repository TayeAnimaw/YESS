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
        Schema::create('event_programs', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->string('location');
            $table->string('coord');
            $table->string('target_audience');
            $table->boolean('registration')->default(true);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('event_programs');
    }
};
