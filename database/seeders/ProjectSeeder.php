<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Website Development',
                'description' => 'Build a corporate website with modern UI/UX and responsive design.',
                // Example status field
                'start_date' => '2024-01-01',
                'end_date' => '2024-06-01',
                'github_url' => 'https://github.com/KajalBormon/To-Do-App.git',
                'live_link_url' => 'google.com',
            ],
            [
                'name' => 'SEO',
                'description' => 'Build a corporate website with modern UI/UX and responsive design.',
                 // Example status field
                'start_date' => '2024-01-01',
                'end_date' => '2024-06-01',
                'github_url' => 'https://github.com/KajalBormon/To-Do-App.git',
                'live_link_url' => 'google.com',
            ],
            [
                'name' => 'App Development',
                'description' => 'Build a corporate website with modern UI/UX and responsive design.',
                 // Example status field
                'start_date' => '2024-01-01',
                'end_date' => '2024-06-01',
                'github_url' => 'https://github.com/KajalBormon/To-Do-App.git',
                'live_link_url' => 'google.com',
            ],
        ];

        DB::table('projects')->insert($data);
    }
}
