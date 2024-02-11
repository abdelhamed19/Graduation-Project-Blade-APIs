<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Note::create([
            "user_id" => 1,
            "body" => "Notes 1"
        ]);

        Note::create([
            "user_id" => 1,
            "body" => "Notes 2"
        ]);
        Note::create([
            "user_id" => 1,
            "body" => "Notes 3"
        ]);
        // User 2
        Note::create([
            "user_id" => 2,
            "body" => "Notes 1"
        ]);

        Note::create([
            "user_id" => 2,
            "body" => "Notes 2"
        ]);
        Note::create([
            "user_id" => 2,
            "body" => "Notes 3"
        ]);
    }
}
