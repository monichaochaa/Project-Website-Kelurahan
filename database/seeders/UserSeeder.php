<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Aurelia Lay',
                'username' => 'aurelialay',
                'email' => 'aurelialay@gmail.com',
                'password' => 'password',
            ],
            [
                'name' => 'Monicha Ailsa',
                'username' => 'monichaailsa',
                'email' => 'monichaailsa@gmail.com',
                'password' => 'password',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']], // Cek berdasarkan email
                [
                    'name' => $user['name'],
                    'username' => $user['username'],
                    'password' => Hash::make($user['password']),
                    'remember_token' => Str::random(10),
                    'email_verified_at' => now(),
                ]
            );
        }

        // Tambah 6 user random dari Factory
        User::factory(6)->create();
    }
}
