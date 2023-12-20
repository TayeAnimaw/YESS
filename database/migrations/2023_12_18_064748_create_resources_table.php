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
        Schema::create('resources', function (Blueprint $table) {
            $table->id('resource_id');
            $table->string('title');
            $table->string('format');
            $table->text('description');
            $table->text('file');
            $table->string('service_id');
            $table->text('tags');
            $table->text('language');
            $table->unsignedBigInteger('category_id');
            // $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
