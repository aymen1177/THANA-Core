<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'full_name' => 'أحمد مقدم خدمة',
            'phone' => '0550000001',
            'email' => 'provider1@thana.dz',
            'password' => Hash::make('password'),
            'role' => 'provider',
            'state' => 'جيجل',
            'municipality' => 'جيجل',
        ]);

        User::create([
            'full_name' => 'محمد مقدم خدمة',
            'phone' => '0550000002',
            'email' => 'provider2@thana.dz',
            'password' => Hash::make('password'),
            'role' => 'provider',
            'state' => 'جيجل',
            'municipality' => 'جيجل',
        ]);
    }
}
