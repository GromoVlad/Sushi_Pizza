<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function index($category = 'pizza')
    {
        $categories = Category::get();
        $category_id = Category::where('name_db', $category)->first()->id;
        $products = Product::where('category_id', $category_id)->with('sizeProduct')->paginate(6);
        return view('index', compact('products', 'categories'));
    }

    public function product($product_id)
    {
        $categories = Category::get();
        $product =  Product::where('id', $product_id)->first();
        $offeredProducts = Product::orderByRaw("RAND()")->take(4)->with('sizeProduct')->get();
        return view('product', compact( 'categories', 'product', 'offeredProducts'));
    }
}
