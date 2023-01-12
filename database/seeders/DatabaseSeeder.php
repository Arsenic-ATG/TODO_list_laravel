<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DEBUG: seed temporary values to the database
        DB::table('tasks2')->insert([
            'name' => 'Ankur',
            'task' => 'task 1',
            'deadline' => '2023:01:01'
        ]);
        DB::table('tasks2')->insert([
            'name' => 'Ankur',
            'task' => 'task 2',
            'deadline' => '2023:01:21'
        ]);
        DB::table('tasks2')->insert([
            'name' => 'Ankur2',
            'task' => 'task 2',
            'deadline' => '2099:03:01'
        ]);
        DB::table('tasks2')->insert([
            'name' => 'Ankur',
            'task' => 'task 3',
        ]);
    }
}
