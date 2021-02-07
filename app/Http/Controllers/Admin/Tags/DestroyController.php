<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $postTags = PostTag::where('tag_id', $tag->id)->get();
        foreach ($postTags as $postTag) {
            $postTag->delete();
        }
        $tag->delete();
        return redirect()->route('tags.create');
    }
}
