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
            'name' => 'Admin Yaa',
            'email' => 'yaya@gmail.com',
            'password' => Hash::make('yayaya'),
            'role' => 'admin',
        ]);User::create([
            'name' => 'Owner',
            'email' => 'dipa@gmail.com',
            'password' => Hash::make('dipaaa'),
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'ipan@gmail.com',
            'password' => Hash::make('agilll'),
            'role' => 'user',
        ]);
    }
}