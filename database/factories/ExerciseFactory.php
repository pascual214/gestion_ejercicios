<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $exercise = config("exercise");
        $name = array_rand($exercise, 1);

        return [
            'name' => $name,
            'time' => $this->faker->numberBetween(2, 30),
            'description' => $exercise[$name]['description'],
            'type' => $exercise[$name]['type'],
        ];
    }
}
