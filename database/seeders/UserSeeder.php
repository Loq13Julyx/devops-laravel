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
            'name' => 'Admin Cafe',
            'email' => 'admin@cafebonanza.com',
            'phone' => '081234567890',
            'address' => 'Cafe Bonanza',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Kasir Cafe',
            'email' => 'kasir@cafebonanza.com',
            'phone' => '081234567891',
            'address' => 'Cafe Bonanza',
            'role' => 'kasir',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Staff Cafe',
            'email' => 'staff@cafebonanza.com',
            'phone' => '081234567892',
            'address' => 'Cafe Bonanza',
            'role' => 'staff',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Customer Demo',
            'email' => 'customer@cafebonanza.com',
            'phone' => '081234567893',
            'address' => 'Indonesia',
            'role' => 'customer',
            'password' => Hash::make('password'),
        ]);
    }
}