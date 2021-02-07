<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(CategoryStoreRequest $request)
    {
        $data = $request->validated();
        Category::create($data);
        return redirect()->route('categories.create');
    }
}
