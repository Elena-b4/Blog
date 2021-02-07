<?php


namespace App\Services;


use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminService
{
    public function updatePost(Array $data, Post $post)
    {
        try {
            DB::connection();
            if (isset($data['path_image'])) {
                $image = $data['path_image'];
                $url = Storage::disk('local')->put('public/posts_images', $image);
                $url = str_replace("public", "storage", $url);
            } else {
                $url = $post->path_image;
            }
            $data['path_image'] = $url;
            $tags = $data['tags'];
            unset($data['tags']);
            $post->update($data);
            $post = $post->refresh();

            $post->tags()->sync($tags);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
        }
    }

    public function storePost(Array $data)
    {
        try {
            DB::connection();
            $image = $data['path_image'];
            $url = Storage::disk('local')->put('public/posts_images', $image);
            $url = str_replace("public", "storage", $url);
            $tags = $data['tags'];
            unset($data['tags']);
            $post = Post::create([
                'path_image' => $url,
                'title' => $data['title'],
                'content' => $data['content'],
                'category_id' => $data['category_id'],
            ]);
            foreach ($tags as $key => $tag) {
                PostTag::create([
                    'post_id' => $post->id,
                    'tag_id' => $tag,
                ]);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
        }
    }

}
