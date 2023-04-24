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
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('quanity');
            $table->string('product')->references('name')->on('products');
            $table->text('address1');
            $table->text('address2');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('pin_code');
            $table->string('payment_method');
            $table->integer('price');
            $table->string('payment_id')->nullable();
            $table->text('faturaadres');
            $table->string('status')->default('Pending');
            $table->string('tracking_no');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
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
