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
        Schema::create('orders', function (Blueprint $table) {
          $table->id();
          $table->integer('user_id');
          $table->string('name');
          $table->string('number');
          $table->string('email');
          $table->string('method');
          $table->string('address');
          $table->string('total_products');
          $table->integer('total_price');
          $table->timestamp('placed_on');
          $table->enum('payment_status', ['pending', 'completed'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
