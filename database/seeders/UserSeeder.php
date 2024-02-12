<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name' => 'abdelhamed',
            'email' => 'abdelhamed.muhammed19@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        Role::create(['name' => 'super-admin']);
        $user->assignRole('super-admin');

        User::create([
            'name' => 'ahmed',
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

    }
}
