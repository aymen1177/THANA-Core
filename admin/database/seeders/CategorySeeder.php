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
                'domain_id' => 1,
                'name_ar' => 'المنزل',
                'name_fr' => 'Maison',
                'name_en' => 'Home',
            ],

            [
                'domain_id' => 1,
                'name_ar' => 'التنظيف',
                'name_fr' => 'Nettoyage',
                'name_en' => 'Cleaning',
            ],

            [
                'domain_id' => 2,
                'name_ar' => 'الأعمال والاستشارات',
                'name_fr' => 'Affaires',
                'name_en' => 'Business',
            ],

            [
                'domain_id' => 2,
                'name_ar' => 'التقنية',
                'name_fr' => 'Technologie',
                'name_en' => 'Technology',
            ],

            [
                'domain_id' => 3,
                'name_ar' => 'الصحة والرعاية',
                'name_fr' => 'Santé',
                'name_en' => 'Healthcare',
            ],

            [
                'domain_id' => 3,
                'name_ar' => 'النقل',
                'name_fr' => 'Transport',
                'name_en' => 'Transport',
            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
