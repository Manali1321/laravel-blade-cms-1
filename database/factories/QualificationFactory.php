<?php

namespace Database\Factories;

use App\Models\Qualification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Qualification>
 */
class QualificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'degree' => $this->faker->sentence,
            'field' => $this->faker->sentence,
            'institute' => $this->faker->sentence,
            'location' => $this->faker->sentence,
            'started_at' => $this->faker->date,
            'ended_at' => $this->faker->date,      
        ];
    }
}
