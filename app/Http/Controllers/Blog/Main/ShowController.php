<?php

namespace App\Http\Controllers\Blog\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $resentPosts = Post::latest()->take(5)->get();
        return view('post-details', compact('post', 'resentPosts'));
    }
}
