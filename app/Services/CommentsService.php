<?php


namespace App\Services;


use App\Models\Comment;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CommentsService
{
    public function storeComment(Array $data, Post $post)
    {
        $content = $data['content'];
        unset($data['content']);
        $visitor = Visitor::create($data);
        Comment::create([
            'content' => $content,
            'visitor_id' => $visitor->id,
            'post_id' => $post->id,
        ]);
    }

}
