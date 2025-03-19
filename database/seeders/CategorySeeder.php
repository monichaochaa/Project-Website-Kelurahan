<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'UI/UX', 'slug' => 'ui-ux', 'color' => 'blue'],
            ['name' => 'Front End', 'slug' => 'front-end', 'color' => 'green'],
            ['name' => 'Machine Learning', 'slug' => 'machine-learning', 'color' => 'red'],
            ['name' => 'Data Science', 'slug' => 'data-science', 'color' => 'yellow'],
            ['name' => 'Web Design', 'slug' => 'web-design', 'color' => 'purple'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],  // Cek apakah slug sudah ada
                [
                    'name' => $category['name'],
                    'color' => $category['color']
                ]
            );
        }
    }
}
