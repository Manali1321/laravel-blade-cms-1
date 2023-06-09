<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'company' => $this->faker->sentence,
            'start' => $this->faker->year,
            'end' => $this->faker->year,
            'detail' => $this->faker->paragraph,
            'location' => $this->faker->sentence,
        ];
    }
}