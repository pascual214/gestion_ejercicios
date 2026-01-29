<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Database\Factories\ExerciseFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (config('exercise') as $name => $data) {
            Exercise::firstOrCreate(
                ['name' => $name],
                [
                    'description' => $data['description'],
                    'type' => $data['type'],
                    'time' => rand(2, 30),
                ]
            );
        }
    }
}
