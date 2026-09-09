<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement([
                'Laravel Basics',
                'Advanced PHP',
                'Database Management',
                'Project Management',
                'Leadership Skills',
                'Communication Skills',
                'Web Security',
                'API Development',
                'Git and GitHub',
                'Docker Basics',
                'JavaScript Fundamentals',
                'Frontend Development',
                'Testing with PHPUnit',
                'Cloud Computing',
                'Data Analysis',
            ]),
            'description' => fake()->sentence(),
            'training_date' => fake()->dateTimeBetween('-3 months', '+3 months')->format('Y-m-d'),
            'provider' => fake()->company(),
        ];
    }
}