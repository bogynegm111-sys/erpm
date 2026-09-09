<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->company() . ' Project',
            'description' => fake()->sentence(),
            'start_date' => fake()->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
            'end_date' => fake()->dateTimeBetween('now', '+6 months')->format('Y-m-d'),
            'status' => fake()->randomElement([
                'pending',
                'active',
                'completed',
            ]),
            'priority' => fake()->randomElement([
                'low',
                'medium',
                'high',
            ]),
        ];
    }
}