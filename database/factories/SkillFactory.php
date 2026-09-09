<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'PHP',
                'Laravel',
                'MySQL',
                'JavaScript',
                'React',
                'Vue.js',
                'HTML',
                'CSS',
                'Git',
                'Docker',
                'API Development',
                'Testing',
                'Project Management',
                'UI Design',
                'Data Analysis',
                'Cybersecurity',
                'Cloud Computing',
                'Communication',
            ]),
            'description' => fake()->sentence(),
        ];
    }
}