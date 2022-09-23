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
        Schema::create('company_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fba_id')->nullable()->constrained('users', 'id')->nullOnDelete();
            $table->foreignId('farmer_id')->nullable()->constrained()->nullOnDelete();
            $table->string('company_name');
            $table->string('company_phone_number')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_phone_number')->nullable();
            $table->string('company_state');
            $table->string('company_city');
            $table->string('company_address');
            $table->date('for_when');
            $table->string('uuid')->unique();
            $table->decimal('total_price', 12, 2)->nullable();
            $table->enum('status', ['new', 'processing', 'shipped', 'delivered', 'cancelled'])->default('new');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('company_orders');
    }
};
