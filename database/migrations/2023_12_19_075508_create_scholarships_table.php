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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id('scholar_id');
            $table->string('title');
            $table->text('description');
            $table->bigInteger('funding_amount');
            $table->string('eligibility_criteria');
            $table->date('deadline');
            $table->string('application_proccess');
            $table->string('program_duration');
            $table->text('funding_source');
            $table->string('institution');
            $table->string('program');
            $table->string('link');
            $table->text('resource')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
