<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DomainSeeder::class,
            CategorySeeder::class,
            ServiceSeeder::class,
            UserSeeder::class,
            ServiceProviderSeeder::class,
            ProviderServiceSeeder::class,
        ]);
    }
}
