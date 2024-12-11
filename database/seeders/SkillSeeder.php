<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'PHP', 'proficiency_level' => 90], // 90%
            ['name' => 'JavaScript', 'proficiency_level' => 80], // 80%
            ['name' => 'Laravel', 'proficiency_level' => 85], // 85%
            ['name' => 'React', 'proficiency_level' => 75], // 75%
            ['name' => 'SEO', 'proficiency_level' => 60], // 60%
            ['name' => 'Android', 'proficiency_level' => 70], // 70%
            ['name' => 'iOS', 'proficiency_level' => 70], // 70%
            ['name' => 'Python', 'proficiency_level' => 95], // 95%
            ['name' => 'Node.js', 'proficiency_level' => 80], // 80%
            ['name' => 'CSS', 'proficiency_level' => 85], // 85%
        ];

        DB::table('skills')->insert($skills);
    }
}
