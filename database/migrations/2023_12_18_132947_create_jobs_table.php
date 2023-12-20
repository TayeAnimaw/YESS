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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('title');
            $table->text('description');
            $table->string('join_type');
            $table->string('employment_type');
            $table->string('industry');
            $table->string('salary_range');
            $table->date('app_deadline');
            $table->text('app_process');
            $table->string('experience');
            $table->string('company_website');
            $table->string('link');
            $table->text('resource')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
