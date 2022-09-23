<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fba_id')->nullable()->constrained('users', 'id')->nullOnDelete();
            $table->string('name');
            $table->string('phone_number');
            $table->string('state');
            $table->string('zone')->nullable();
            $table->string('address');
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            $table->double('total_land_size');
            $table->double('currently_free_land_size');
            $table->double('currently_occupied_land_size')->default(0.0);
            $table->json('soil_types')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
};
