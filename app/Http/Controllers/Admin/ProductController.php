<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();
        if ($request->category_id != 0) {
            $products = Product::where('category_id', $request->category_id)->
            with('category')->with('sizeProduct')->paginate(6)->withPath("?" . $request->getQueryString());
        } else {
            $products = Product::with('category')->with('sizeProduct')->paginate(6);
        }
        return view('admin.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            $path = $request->file('image')->store('products');
            $params['image'] = $path;
        }
        Product::create($params);
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($product->image);
            $path = $request->file('image')->store('products');
            $params['image'] = $path;
        }
        $product->update($params);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
