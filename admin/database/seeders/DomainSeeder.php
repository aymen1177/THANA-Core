<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Domain;

class DomainSeeder extends Seeder
{
    public function run(): void
    {
        $domains = [

            [
                'name_ar' => 'الخدمات المنزلية',
                'name_fr' => 'Services à domicile',
                'name_en' => 'Home Services',
            ],

            [
                'name_ar' => 'الخدمات المهنية',
                'name_fr' => 'Services professionnels',
                'name_en' => 'Professional Services',
            ],

            [
                'name_ar' => 'الخدمات الشخصية',
                'name_fr' => 'Services personnels',
                'name_en' => 'Personal Services',
            ],

        ];

        foreach ($domains as $domain) {
            Domain::create($domain);
        }
    }
}
