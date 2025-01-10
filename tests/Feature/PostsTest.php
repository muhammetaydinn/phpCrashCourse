<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_can_see_post_title_on_index(): void
    {
        // fill our database with some data
        $this->seed();
        $post = Post::all()->random()->first();
        $response = $this->get('/posts');

        $response->assertSee($post->title);
    }

    public function test_can_see_post_on_single(): void
    {
        // fill our database with some data
        $this->seed();
        $post = Post::all()->random()->first();
        $response = $this->get(route('posts.show', $post));

        $response->assertSee($post->title);
        $response->assertSee($post->category->title);
    }
}
