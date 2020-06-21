<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ToppingProduct;
use Illuminate\Http\Request;

class AddToppingController extends Controller
{
    public function addToppings(Product $product)
    {
        return view('add_toppings.edit', compact('product'));
    }

    public function saveToppings(Request $request, Product $product)
    {
        ToppingProduct::where('product_id', $product->id)->delete();
        foreach ($request->active_topping as $activeTopping) {
            ToppingProduct::create(['product_id' => $product->id, 'topping_id' => $activeTopping]);
        }
        return redirect()->route('products.index');
    }
}
