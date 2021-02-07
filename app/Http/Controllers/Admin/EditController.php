<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();
        $comments = Comment::all();
        return view('admin.edit', compact('categories', 'tags', 'post', 'comments', 'posts'));
    }
}
