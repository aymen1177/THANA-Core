<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            $table->string('full_name');

            $table->string('phone', 20)
                  ->unique();

            $table->string('email', 150)
                  ->unique()
                  ->nullable();

            $table->string('password');

            $table->enum('role', [
                'customer',
                'provider',
                'admin'
            ])->default('customer');

            $table->string('state', 100)
                  ->nullable();

            $table->string('municipality', 100)
                  ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
