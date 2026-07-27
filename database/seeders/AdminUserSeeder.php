<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        // Menggunakan updateOrCreate agar tidak terjadi error double data jika seeder dijalankan ulang
        User::updateOrCreate(
            ['email' => 'admin@ksurvey.com'], // Cari berdasarkan email
            [
                'name' => 'Admin KSurvey',
                'password' => Hash::make('ksurvey123'), // Password Anda
                'role' => 'admin',
            ]
        );
    }
}