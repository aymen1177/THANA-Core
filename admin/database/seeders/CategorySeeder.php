<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [

            [
                'name_ar' => 'المنزل',
                'name_fr' => 'Maison',
                'name_en' => 'Home',
            ],

            [
                'name_ar' => 'الصحة والرعاية',
                'name_fr' => 'Santé',
                'name_en' => 'Healthcare',
            ],

            [
                'name_ar' => 'السيارات',
                'name_fr' => 'Automobile',
                'name_en' => 'Automotive',
            ],

            [
                'name_ar' => 'التقنية',
                'name_fr' => 'Technologie',
                'name_en' => 'Technology',
            ],

            [
                'name_ar' => 'التعليم',
                'name_fr' => 'Éducation',
                'name_en' => 'Education',
            ],

            [
                'name_ar' => 'النقل',
                'name_fr' => 'Transport',
                'name_en' => 'Transport',
            ],

            [
                'name_ar' => 'التنظيف',
                'name_fr' => 'Nettoyage',
                'name_en' => 'Cleaning',
            ],

            [
                'name_ar' => 'المناسبات',
                'name_fr' => 'Événements',
                'name_en' => 'Events',
            ],

            [
                'name_ar' => 'الزراعة',
                'name_fr' => 'Agriculture',
                'name_en' => 'Agriculture',
            ],

            [
                'name_ar' => 'الأعمال والاستشارات',
                'name_fr' => 'Affaires',
                'name_en' => 'Business',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
