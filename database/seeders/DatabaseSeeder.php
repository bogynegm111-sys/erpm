<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DepartmentSeeder::class,
            EmployeeSeeder::class,
            ProjectSeeder::class,
            SkillSeeder::class,
            TrainingSeeder::class,
            TaskSeeder::class,
        ]);
    }
}