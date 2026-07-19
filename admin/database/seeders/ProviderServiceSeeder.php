<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProviderService;

class ProviderServiceSeeder extends Seeder
{
    public function run(): void
    {
        ProviderService::create([
            'service_provider_id' => 1,
            'service_id' => 1,
            'title' => 'تنظيف المنازل',
            'description' => 'خدمة تنظيف منزلية احترافية',
            'price' => 3000,
            'price_type' => 'fixed',
            'duration' => 120,
            'available' => true,
        ]);

        ProviderService::create([
            'service_provider_id' => 2,
            'service_id' => 5,
            'title' => 'صيانة الحواسيب',
            'description' => 'إصلاح وصيانة أجهزة الكمبيوتر',
            'price' => 2500,
            'price_type' => 'fixed',
            'duration' => 90,
            'available' => true,
        ]);
    }
}
