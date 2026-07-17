<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {

            $table->id();

            $table->string('site_name')->default('THANA.DZ');

            $table->string('site_logo')->nullable();

            $table->string('support_email')->nullable();

            $table->string('support_phone')->nullable();

            $table->string('default_language')->default('ar');

            $table->string('default_currency')->default('DZD');

            $table->boolean('registration_enabled')->default(true);

            $table->boolean('sms_enabled')->default(false);

            $table->boolean('email_enabled')->default(true);

            $table->boolean('maps_enabled')->default(false);

            $table->boolean('payments_enabled')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
