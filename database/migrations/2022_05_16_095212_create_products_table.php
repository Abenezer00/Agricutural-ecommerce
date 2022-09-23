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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('sku')->unique()->nullable();
            $table->string('barcode')->unique()->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('qty')->default(0);
            $table->boolean('featured')->default(false);
            $table->boolean('is_visible')->default(false);
            $table->decimal('old_price', 10, 2)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('cost', 10, 2)->nullable();
            $table->unsignedInteger('period'); // period for growing vegetables in days
            $table->double('yield'); // per m2 in kg
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
        Schema::dropIfExists('products');
    }
};
