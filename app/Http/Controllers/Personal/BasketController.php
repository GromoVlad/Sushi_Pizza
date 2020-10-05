<?php

namespace App\Http\Controllers\Personal;

use App\Classes\Basket;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();
        $basketClass = new Basket($request);
        $basket = $basketClass->getBasket();
        $resultPrice = $basketClass->getResultPrice();
        return view('personal.basket', compact('basket', 'categories', 'resultPrice'));
    }

    public function create(Request $request)
    {
        $params = $request->all();
        $params['topping_id_one'] = empty($params['topping']) ? null : $params['topping'][0];
        $params['topping_id_two'] = empty($params['topping'][1]) ? null : $params['topping'][1];
        $request->session()->push('basket', json_encode($params));
        return redirect()->back();
    }

    public function delete(Request $request, $product_id)
    {
        $request->session()->forget('basket.' . $product_id);
        return redirect()->back();
    }
}
