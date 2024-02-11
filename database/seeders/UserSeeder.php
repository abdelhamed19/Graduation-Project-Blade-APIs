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
            'name' => 'leo',
            'email' => 'leo@yahoo.com',
            'password' => bcrypt('123456789'),
        ]);
        User::create([
            'name' => 'ali',
            'email' => 'ali@yahoo.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
