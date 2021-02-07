<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Visitor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $allPosts = Post::all();
        $posts = Post::paginate(6);
        $comments = Comment::all();
        return view('admin.index', compact('posts', 'comments', 'categories', 'tags', 'allPosts'));
    }
}
