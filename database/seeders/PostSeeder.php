<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::factory(10)->create(); // Buat 10 postingan dummy
    }
}
