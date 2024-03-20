<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin ajah',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin'
            ],
            [
                'name' => 'Lutfi Hakim',
                'email' => 'lutfihakim@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'user'
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password456')
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'password' => Hash::make('password789')
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emily@example.com',
                'password' => Hash::make('passwordabc')
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david@example.com',
                'password' => Hash::make('passworddef')
            ],
            [
                'name' => 'Sarah Taylor',
                'email' => 'sarah@example.com',
                'password' => Hash::make('passwordghi')
            ],
            [
                'name' => 'Christopher Martinez',
                'email' => 'christopher@example.com',
                'password' => Hash::make('passwordjkl')
            ],
            [
                'name' => 'Amanda Anderson',
                'email' => 'amanda@example.com',
                'password' => Hash::make('passwordmno')
            ],
            [
                'name' => 'Daniel Thomas',
                'email' => 'daniel@example.com',
                'password' => Hash::make('passwordpqr')
            ],
            [
                'name' => 'Olivia Garcia',
                'email' => 'olivia@example.com',
                'password' => Hash::make('passwordstu')
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
