<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceProvider;

class ServiceProviderSeeder extends Seeder
{
    public function run(): void
    {
        ServiceProvider::create([
            'user_id' => 1,
            'business_name' => 'مؤسسة البيت المثالي',
            'description' => 'خدمات منزلية وصيانة عامة',
            'logo' => null,
            'phone' => '0550000001',
            'address' => 'جيجل',
            'latitude' => 36.8200,
            'longitude' => 5.7667,
            'verification_status' => 'approved',
            'status' => 'active',
        ]);

        ServiceProvider::create([
            'user_id' => 2,
            'business_name' => 'تقنية المستقبل',
            'description' => 'خدمات تقنية وصيانة الحواسيب',
            'logo' => null,
            'phone' => '0550000002',
            'address' => 'جيجل',
            'latitude' => 36.8200,
            'longitude' => 5.7667,
            'verification_status' => 'approved',
            'status' => 'active',
        ]);
    }
}
