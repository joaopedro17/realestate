<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active',
            ],
            // Agent 
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@test.com',
                'password' => Hash::make('password'),
                'role' => 'agent',
                'status' => 'active',
            ],
            // User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@test.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
