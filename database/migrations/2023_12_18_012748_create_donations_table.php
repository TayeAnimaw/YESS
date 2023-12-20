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
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('donation_id');
            $table->unsignedInteger('donor_id');
            $table->unsignedInteger('campaign_id');
            $table->decimal('amount', 8, 2);
            $table->string('currency');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('donor_id')->references('donor_id')->on('donors')->onDelete('cascade');
            $table->foreign('campaign_id')->references('campaign_id')->on('campaigns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
};
