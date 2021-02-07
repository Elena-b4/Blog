<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;

    /** @test */
    public function a_project_can_be_stored()
    {
        Storage::fake('local');
        $image = UploadedFile::fake()->image('123.jpg');
        $category = Category::factory()->create();
//        $tag = Tag::factory()->create();
        $args = [
            'path_image' => $image,
            'title' => 'New Post',
            'content' => 'Content of new post',
            'category_id' => $category->id,
        ];
        $response = $this->post('/admin', $args);
        $response->assertRedirect();
        $this->assertDatabaseHas('posts', $args);
    }

    
}
