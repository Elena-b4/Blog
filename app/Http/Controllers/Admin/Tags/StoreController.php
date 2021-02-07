<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(TagStoreRequest $request)
    {
        $data = $request->validated();
        Tag::create($data);
        return redirect()->route('tags.create');
    }
}
