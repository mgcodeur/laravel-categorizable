<?php

namespace Mgcodeur\LaravelCategorizable\Controllers;

use Illuminate\Support\Str;
use Mgcodeur\LaravelCategorizable\Model\Category;
use Mgcodeur\LaravelCategorizable\Requests\CategoryRequest;

class CategoryController
{
    public function index()
    {
        $categories = Category::with('childrens')->whereNull('parent_id')->get();

        return response()->json($categories);
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create(
            array_merge($request->validated(), ['slug' => Str::slug($request->name)])
        );

        return response()->json($category, 201);
    }
}
