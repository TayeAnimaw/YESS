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
        Schema::create('partners', function (Blueprint $table) {
            $table->id('partner_id');
            $table->string('organization');
            $table->string('email');
            $table->string('phone');
            $table->string('area_of_collaboration');
            $table->string('agreement_file');
            $table->enum('organization_type', ['Type1', 'Type2', 'Type3']);
            $table->string('status');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
};
