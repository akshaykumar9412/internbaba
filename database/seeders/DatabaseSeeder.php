<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insert multiple records in one go
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@yopmail.com',
                'password' => bcrypt('password123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@yopmail.com',
                'password' => bcrypt('password123'),
                'role' => 'customer',
            ],
            [
                'name' => 'User',
                'email' => 'user@yopmail.com',
                'password' => bcrypt('password123'),
                'role' => 'customer',
            ]
        ]);
    }
}
