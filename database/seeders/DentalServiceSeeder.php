<?php

namespace Database\Seeders;

use App\Models\DentalService;
use Illuminate\Database\Seeder;

class DentalServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['name' => 'Teeth Cleaning', 'category' => 'Cleaning', 'default_cost' => 5000.00],
            ['name' => 'Deep Cleaning (Scaling)', 'category' => 'Cleaning', 'default_cost' => 10000.00],
            ['name' => 'Composite Filling', 'category' => 'Filling', 'default_cost' => 8000.00],
            ['name' => 'Amalgam Filling', 'category' => 'Filling', 'default_cost' => 5000.00],
            ['name' => 'Simple Extraction', 'category' => 'Extraction', 'default_cost' => 7000.00],
            ['name' => 'Surgical Extraction', 'category' => 'Extraction', 'default_cost' => 15000.00],
            ['name' => 'Root Canal Treatment', 'category' => 'Root Canal', 'default_cost' => 50000.00],
            ['name' => 'Porcelain Crown', 'category' => 'Crown', 'default_cost' => 80000.00],
            ['name' => 'Teeth Whitening', 'category' => 'Whitening', 'default_cost' => 35000.00],
            ['name' => 'Full Checkup', 'category' => 'Checkup', 'default_cost' => 3000.00],
        ];

        foreach ($services as $service) {
            DentalService::create($service);
        }
    }
}
