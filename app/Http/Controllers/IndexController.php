<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::paginate(6);
        $resentPosts = Post::latest()->take(5)->get();
        return view('index', compact('posts', 'categories', 'tags', 'resentPosts'));
    }
}
