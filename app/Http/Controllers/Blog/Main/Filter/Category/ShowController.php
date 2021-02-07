<?php

namespace App\Http\Controllers\Blog\Main\Filter\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $countOfPosts = $category->posts->count();
        if ($countOfPosts != 0) {
            return view('filter.category', compact('category'));
        }
        return back();
    }
}
