<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            "user_id"=>1,
            "body"=>["Task1", "Task1", "Task1","Task1"]
        ]);
        Task::create([
            "user_id"=>1,
            "body"=>["Task2", "Task2", "Task2","Task2"]
        ]);
        Task::create([
            "user_id"=>1,
            "body"=>["Task3", "Task3", "Task3","Task3"]
        ]);

        // User 2
        Task::create([
            "user_id"=>2,
            "body"=>["Task1", "Task1", "Task1","Task1"]
        ]);
        Task::create([
            "user_id"=>2,
            "body"=>["Task2", "Task2", "Task2","Task2"]
        ]);
        Task::create([
            "user_id"=>2,
            "body"=>["Task3", "Task3", "Task3","Task3"]
        ]);
    }
}
