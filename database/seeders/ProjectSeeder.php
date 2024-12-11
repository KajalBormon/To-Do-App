<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
             'name' => 'Website Development',
            'description' => 'Build a corporate website with modern UI/UX and responsive design.',
            'status' => 'pending', // Example status field
            'start_date' => '2024-01-01',
            'end_date' => '2024-06-01',
            'github_url' => ''
        ];
    }
}
