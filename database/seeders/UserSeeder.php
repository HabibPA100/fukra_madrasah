<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'name' => 'Admin',
           'email' => 'admin@gmail.com',
           'password' => '11111111',
           'role' => 'admin'
        ]);
        User::create([
           'name' => 'Habib',
           'email' => 'habib@gmail.com',
           'password' => '11111111',
           'role' => 'user'
        ]);
        User::create([
           'name' => 'Khalid',
           'email' => 'khalid@gmail.com',
           'password' => '11111111',
           'role' => 'user'
        ]);
        User::create([
           'name' => 'user4',
           'email' => 'user@gmail.com',
           'password' => '11111111',
           'role' => 'user'
        ]);
    }
}
