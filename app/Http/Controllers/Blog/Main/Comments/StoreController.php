<?php

namespace App\Http\Controllers\Blog\Main\Comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(CommentStoreRequest $request, Post $post)
    {
        $data = $request->validated();
        $this->service->storeComment($data, $post);
        return redirect()->route('blog.show', $post->id);
    }
}
