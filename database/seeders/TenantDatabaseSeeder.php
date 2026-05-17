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
        $roles = [
            ['username' => 'doctor', 'role' => 'doctor'],
            ['username' => 'patient', 'role' => 'patient'],
            ['username' => 'receptionist', 'role' => 'receptionist'],
            ['username' => 'nurse', 'role' => 'nurse'],
            ['username' => 'accountant', 'role' => 'accountant'],
            ['username' => 'lab_tech', 'role' => 'lab_tech'],
            ['username' => 'clinic_admin', 'role' => 'clinic_admin'],
        ];

        foreach ($roles as $data) {
            User::factory()->create([
                'username' => $data['username'],
                'password' => Hash::make('password'),
                'role' => $data['role'],
            ]);
        }
    }
}
