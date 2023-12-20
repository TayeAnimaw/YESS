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
        Schema::create('news', function (Blueprint $table) {
            $table->id('news_id');
            $table->string('author');
            $table->string('title');
            $table->text('thumbnail');
            $table->string('description');
            $table->date('date');
            $table->string('is_visible');
            $table->string('tags');
            $table->string('featured');
            $table->string('links');
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
        Schema::dropIfExists('news');
    }
};
