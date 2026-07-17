<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->id();

            $table->foreignId('customer_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            $table->foreignId('provider_id')
                  ->constrained('service_providers')
                  ->cascadeOnDelete();

            $table->foreignId('service_id')
                  ->constrained('services')
                  ->cascadeOnDelete();

            $table->enum('order_status', [
                'pending',
                'accepted',
                'completed',
                'cancelled'
            ])->default('pending');

            $table->dateTime('appointment_date')
                  ->nullable();

            $table->decimal('total_price', 10, 2)
                  ->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
