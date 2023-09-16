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

            
            $table->id(); // Auto-incrementing ID field
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key for user (if user is logged in)
            $table->string('name'); // Customer's name (if user is not logged in)
            $table->string('email'); // Customer's email address (if user is not logged in)
            $table->string('phone')->nullable(); // Customer's phone number
            
            $table->string('address')->nullable(); // Customer's address
            $table->string('city')->nullable(); // Customer's city
            $table->string('state')->nullable(); // Customer's state
            $table->string('zipcode')->nullable(); // Customer's zipcode
            $table->string('country')->nullable(); // Customer's country

            $table->string('shipping_method'); // Shipping method selected for the order
            $table->decimal('shipping_amount', 8, 2)->nullable(); // Order shipping amount, up to 8 digits with 2 decimal places


            $table->decimal('tax_amount', 8, 2)->nullable(); // Order tax amount, up to 8 digits with 2 decimal places
            $table->decimal('total', 8, 2); // Order total, up to 8 digits with 2 decimal places


            $table->string('payment_method'); // Payment method used for the order
            $table->string('payment_status')->default('pending'); // Payment status for the order


            $table->string('status')->default('pending'); // Order status
            $table->string('notes')->nullable(); // Additional notes for the order

            $table->timestamps(); // Timestamps for creation and updates

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
