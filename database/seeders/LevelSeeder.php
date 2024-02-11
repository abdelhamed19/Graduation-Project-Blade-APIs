<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            "name"=>"Level 1"
        ]);
        Level::create([
            "name"=>"Level 2"
        ]);
        Level::create([
            "name"=>"Level 3"
        ]);
        Level::create([
            "name"=>"Level 4"
        ]);
        Level::create([
            "name"=>"Level 5"
        ]);
        Level::create([
            "name"=>"Level 6"
        ]);
        Level::create([
            "name"=>"Level 7"
        ]);
        Level::create([
            "name"=>"Level 8"
        ]);
    }
}
