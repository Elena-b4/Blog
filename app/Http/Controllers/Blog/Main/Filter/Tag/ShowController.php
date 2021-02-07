<?php

namespace App\Http\Controllers\Blog\Main\Filter\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $countOfPosts = $tag->posts->count();
        if ($countOfPosts != 0) {
            return view('filter.tag', compact('tag'));
        }
        return back();

    }
}
