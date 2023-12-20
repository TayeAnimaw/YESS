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
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('donor_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('type');
            $table->decimal('total_amount', 8, 2)->default(0);
            $table->string('country');
            $table->date('last_donation')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
};
