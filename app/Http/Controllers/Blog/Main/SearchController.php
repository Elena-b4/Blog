<?php

namespace App\Http\Controllers\Blog\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostSearchRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(PostSearchRequest $request)
    {
        $resentPosts = Post::latest()->take(5)->get();
        $categories = Category::all();
        $tags = Tag::all();
        $data = $request->validated();
        $value = $data['title'];
        $posts = Post::where('title', 'like', "%$value%")->paginate(2);
        $countOfPosts = $posts->count();
        if ($countOfPosts != 0) {
            $posts->appends($data);
            return view('index', compact('posts', 'resentPosts', 'categories', 'tags'));
        }
        return back();
    }
}
