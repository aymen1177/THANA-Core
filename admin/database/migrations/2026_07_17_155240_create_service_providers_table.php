<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_providers', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('business_name', 150);

            $table->text('description')
                  ->nullable();

            $table->string('logo')
                  ->nullable();

            $table->string('phone', 20)
                  ->nullable();

            $table->text('address')
                  ->nullable();

            $table->decimal('latitude', 10, 8)
                  ->nullable();

            $table->decimal('longitude', 11, 8)
                  ->nullable();

            $table->enum('verification_status', [
                'pending',
                'approved',
                'rejected'
            ])->default('pending');

            $table->enum('status', [
                'active',
                'inactive',
                'blocked'
            ])->default('active');

            $table->timestamps();

            $table->softDeletes();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_providers');
    }
};
