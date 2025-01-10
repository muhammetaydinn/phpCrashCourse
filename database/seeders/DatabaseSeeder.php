<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory()->create([
            'title' => 'Cats',
            'description' => 'Posts about cats',
        ]);
        Category::factory()->create([
            'title' => 'Dogs',
            'description' => 'Posts about dogs',
        ]);
        foreach (Category::all() as $category) {
            $category->posts()->saveMany(
                Post::factory(10)->make()
            );
        }

    }
}
