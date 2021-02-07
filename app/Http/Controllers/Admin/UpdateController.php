<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(PostUpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $this->service->updatePost($data, $post);
        return redirect()->route('admin.index');
    }
}
