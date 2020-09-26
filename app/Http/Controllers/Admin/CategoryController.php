<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            $path = $request->file('image')->store('category');
            $params['image'] = $path;
        }
        Category::create($params);
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($category->image);
            $path = $request->file('image')->store('category');
            $params['image'] = $path;
        }
        $category->update($params);
        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
