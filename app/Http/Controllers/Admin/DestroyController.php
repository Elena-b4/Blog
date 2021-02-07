<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $countOfComments = $post->comments->count();
        if ($countOfComments !== 0) {
            foreach ($post->comments as $comment) {
                $commentOfPost = $comment;
                $commentOfPost->delete();
            }
        }
        $post->delete();
        return redirect()->route('admin.index');
    }
}
