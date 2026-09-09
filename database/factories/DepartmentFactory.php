<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'IT',
                'HR',
                'Finance',
                'Marketing',
                'Sales',
                'Operations',
                'Engineering',
                'Support',
            ]),
            'description' => fake()->sentence(),
        ];
    }
}