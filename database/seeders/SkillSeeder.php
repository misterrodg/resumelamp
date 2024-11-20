<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $languages = SkillCategory::create([
            'skill_category_name' => 'Languages'
        ]);

        $languages->skills()->createMany([
            ['skill_name' => 'C++', 'rating' => 7],
            ['skill_name' => 'C#', 'rating' => 6],
            ['skill_name' => 'CSS', 'rating' => 8],
            ['skill_name' => 'Go', 'rating' => 8],
            ['skill_name' => 'JavaScript', 'rating' => 8],
            ['skill_name' => 'PHP', 'rating' => 8],
            ['skill_name' => 'Python', 'rating' => 9]
        ]);

        $databases = SkillCategory::create([
            'skill_category_name' => 'Databases'
        ]);

        $databases->skills()->createMany([
            ['skill_name' => 'MySQL', 'rating' => 9],
            ['skill_name' => 'MSSQL', 'rating' => 8]
        ]);

        $dataFormats = SkillCategory::create([
            'skill_category_name' => 'Data Formats'
        ]);

        $dataFormats->skills()->createMany([
            ['skill_name' => 'INI', 'rating' => 7],
            ['skill_name' => 'JSON', 'rating' => 9],
            ['skill_name' => 'GeoJSON', 'rating' => 9],
            ['skill_name' => 'TOML', 'rating' => 6],
            ['skill_name' => 'XML', 'rating' => 6],
            ['skill_name' => 'YAML', 'rating' => 7]
        ]);

        $tools = SkillCategory::create([
            'skill_category_name' => 'Tools'
        ]);

        $tools->skills()->createMany([
            ['skill_name' => 'Docker', 'rating' => 6],
            ['skill_name' => 'Git', 'rating' => 8],
            ['skill_name' => 'Vite', 'rating' => 7]
        ]);
    }
}
