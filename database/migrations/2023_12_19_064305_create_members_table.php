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
        Schema::create('members', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->unsignedBigInteger('role_id');
            $table->date('date_joined');
            $table->string('password');
            $table->text('bio')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('locations')->nullable();
            $table->string('interest')->nullable();
            $table->string('skill')->nullable();
            $table->string('status');
            // $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
