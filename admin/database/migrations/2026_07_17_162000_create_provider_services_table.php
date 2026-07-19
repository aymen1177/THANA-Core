<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('provider_services', function (Blueprint $table) {

            $table->id();

            $table->foreignId('service_provider_id')
                  ->constrained('service_providers')
                  ->cascadeOnDelete();

            $table->foreignId('service_id')
                  ->constrained('services')
                  ->cascadeOnDelete();

            $table->string('title')
                  ->nullable();

            $table->text('description')
                  ->nullable();

            $table->decimal('price', 10, 2)
                  ->nullable();

            $table->enum('price_type', [
                'fixed',
                'hourly',
                'daily',
                'custom'
            ])->default('fixed');

            $table->integer('duration')
                  ->nullable();

            $table->boolean('available')
                  ->default(true);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('provider_services');
    }
};
