<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create([
            'username' => 'clinician',
            'password' => Hash::make('password'),
            'user_type' => 'clinician',
        ]);

        User::factory()->create([
            'username' => 'patient',
            'password' => Hash::make('password'),
            'user_type' => 'patient',
        ]);
    }
}
