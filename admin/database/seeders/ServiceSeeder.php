<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            [
                'category_id' => 1,
                'name' => 'تنظيف المنازل',
                'description' => 'خدمات تنظيف وترتيب المنازل',
                'image' => null,
                'status' => true,
            ],

            [
                'category_id' => 1,
                'name' => 'الصيانة المنزلية',
                'description' => 'إصلاحات وصيانة مختلفة داخل المنزل',
                'image' => null,
                'status' => true,
            ],

            [
                'category_id' => 2,
                'name' => 'تنظيف المكاتب والمحلات',
                'description' => 'خدمات تنظيف للمكاتب والمحلات التجارية',
                'image' => null,
                'status' => true,
            ],

            [
                'category_id' => 3,
                'name' => 'استشارات الأعمال',
                'description' => 'استشارات مهنية وإدارية',
                'image' => null,
                'status' => true,
            ],

            [
                'category_id' => 4,
                'name' => 'صيانة الحواسيب',
                'description' => 'إصلاح وصيانة أجهزة الكمبيوتر والبرامج',
                'image' => null,
                'status' => true,
            ],

            [
                'category_id' => 5,
                'name' => 'رعاية صحية منزلية',
                'description' => 'خدمات الرعاية والمتابعة الصحية المنزلية',
                'image' => null,
                'status' => true,
            ],

            [
                'category_id' => 6,
                'name' => 'خدمات النقل',
                'description' => 'نقل الأشخاص والأغراض',
                'image' => null,
                'status' => true,
            ],

        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
