<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SizeProductRequest;
use App\Models\Product;
use App\Models\SizeProduct;

class SizeProductController extends Controller
{
    public function index(Product $product)
    {
        return view('admin.size_product.index', compact('product'));
    }

    public function create(Product $product)
    {
        return view('admin.size_product.create', compact('product'));
    }

    public function store(SizeProductRequest $request, Product $product)
    {
        $params = $request->all();
        $params['category_id'] = $product->category_id;
        $params['product_id'] = $product->id;
        SizeProduct::create($params);
        return redirect()->route('size_product.index', $product);
    }

    public function show(Product $product, SizeProduct $sizeProduct)
    {
        return view('admin.size_product.show', compact('product', 'sizeProduct'));
    }

    public function edit(Product $product, SizeProduct $sizeProduct)
    {
        return view('admin.size_product.edit', compact('product', 'sizeProduct'));
    }

    public function update(SizeProductRequest $request, Product $product, SizeProduct $sizeProduct)
    {
        $params = $request->all();
        $params['category_id'] = $product->category_id;
        $params['product_id'] = $product->id;
        $sizeProduct->update($params);
        return redirect()->route('size_product.index', $product);
    }

    public function destroy(Product $product, SizeProduct $sizeProduct)
    {
        $sizeProduct->delete();
        return redirect()->route('size_product.index', $product);
    }
}
