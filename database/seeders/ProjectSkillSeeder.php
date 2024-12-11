<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project1 = Project::find(1);  // Retrieve Project with ID 1
        $project1->skills()->attach([1, 2, 3]); // Attach Skill IDs 1, 2, and 3 to this project

        // Insert skills for Project 2
        $project2 = Project::find(2);  // Retrieve Project with ID 2
        $project2->skills()->attach([4, 5, 6]); // Attach Skill IDs 4, 5, and 6 to this project

        // Insert skills for Project 3
        $project3 = Project::find(3);  // Retrieve Project with ID 3
        $project3->skills()->attach([7, 8]); 
    }
}
