<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $customers = Customer::all();
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();
        $comments = Comment::all();
        return view('admin.customers', compact('posts', 'comments', 'categories', 'tags', 'customers'));
    }
}
