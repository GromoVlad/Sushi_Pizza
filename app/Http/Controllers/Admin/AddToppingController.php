<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddToppingController extends Controller
{
    public function addToppings(Product $product)
    {
        return view('admin.add_toppings.edit', compact('product'));
    }

    public function saveToppings(Request $request, Product $product)
    {
        DB::table('topping_products')->where('product_id', $product->id)->delete();
        foreach ($request->active_topping as $activeTopping) {
            DB::table('topping_products')->insert([
                'product_id' => $product->id,
                'topping_id' => $activeTopping,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ]);
        }
        return redirect()->route('products.index');
    }
}
