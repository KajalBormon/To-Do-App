<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'project_id' => 1,
                'skill_id' => 1
            ],
            [
                'project_id' => 1,
                'skill_id' => 2
            ],
            [
                'project_id' => 1,
                'skill_id' => 3
            ],
            [
                'project_id' => 2,
                'skill_id' => 4
            ],
            [
                'project_id' => 2,
                'skill_id' => 5
            ],
            [
                'project_id' => 2,
                'skill_id' => 6
            ],
            [
                'project_id' => 3,
                'skill_id' => 7
            ],
            [
                'project_id' => 3,
                'skill_id' => 8
            ],
            [
                'project_id' => 3,
                'skill_id' => 9
            ],
            [
                'project_id' => 3,
                'skill_id' => 10
            ],
        ];

        DB::table('pivot')->insert($data);
    }
}
