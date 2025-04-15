<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'yaya@gmail.com',
            'password' => Hash::make('yayaa'),
            'role' => 'admin',
        ]);User::create([
            'name' => 'Admin',
            'email' => 'dipa@gmail.com',
            'password' => Hash::make('dipa'),
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'ipan@gmail.com',
            'password' => Hash::make('agil'),
            'role' => 'user',
        ]);
    }
}