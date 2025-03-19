<?php

namespace Database\Seeders;

use App\Models\AdminUser; // Pastikan model benar
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            AdminUser::create([
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'), // Pastikan password di-hash
            ]);
        }
    }
}
