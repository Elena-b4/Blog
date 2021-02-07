<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        foreach ($category->posts as $post) {
            $postsofCategory = $post;
            $postsofCategory->delete();
        }
        $category->delete();
        return redirect()->route('categories.create');
    }
}
