<?php

namespace App\Http\Controllers\Personal;

use App\Classes\Basket;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SizeProduct;
use App\Models\Topping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();

      //  $basket = $request->session()->all();
        $basket = [];
        $basket1 = new Basket($request);
        if(isset($request->session()->all()['basket'])) {
            foreach ($request->session()->all()['basket'] as $key => $merchandise) {
                $id = uniqid();
                $merchandise = json_decode($merchandise);
                $sizeProduct = SizeProduct::where('id', $merchandise->size_products_id)->first();
                $product = $sizeProduct->product()->first();

                dump($product->topping->where('id', $merchandise->topping_id_two)->first());


                $category = $sizeProduct->category()->first();
                $basket[$id]['full_price'] = $sizeProduct->price;
                if (isset($merchandise->topping_id_two)) {
                    $toppingTwo = Topping::where('id', $merchandise->topping_id_two)->first();
                    $basket[$id]['full_price'] += $toppingTwo->price;
                } else {
                    $toppingTwo = null;
                }
                if (isset($merchandise->topping_id_one)) {
                    $toppingOne = Topping::where('id', $merchandise->topping_id_one)->first();
                    $basket[$id]['full_price'] += $toppingOne->price;
                } else {
                    $toppingOne = null;
                }
                $basket[$id]['category_name'] = $category->name;
                $basket[$id]['product_name'] = $product->name;
                $basket[$id]['product_image'] = $product->image;
                $basket[$id]['size'] = $sizeProduct->size;
                //   $basket[$id]['price'] = $sizeProduct->price;
                $basket[$id]['weight'] = $sizeProduct->weight;
                $basket[$id]['topping_one_name'] = isset($toppingOne->name) ? $toppingOne->name : null;
                //    $basket[$id]['topping_one_price'] = isset($toppingOne->price) ? $toppingOne->price : null;
                $basket[$id]['topping_one_weight'] = isset($toppingOne->weight) ? $toppingOne->weight : null;
                $basket[$id]['topping_two_name'] = isset($toppingTwo->name) ? $toppingTwo->name : null;
                //      $basket[$id]['topping_two_price'] = isset($toppingTwo->price) ? $toppingTwo->price : null;
                $basket[$id]['topping_two_weight'] = isset($toppingTwo->weight) ? $toppingTwo->weight : null;
            }
        }
        return view('personal.basket', compact('basket', 'categories'));
    }





    public function create(Request $request)
    {
        $params = $request->all();
        if(Auth::user() != null){
            $params['user_id'] = Auth::user()->id;
        }
        if(!empty($params['topping'])){
            $params['topping_id_one'] = $params['topping'][0];
            if(!empty($params['topping'][1])){
                $params['topping_id_two'] = $params['topping'][1];
            }
            unset($params['topping']);
        }
        unset($params['_token']);
        //Basket::create($params);
        // session(['basket' => [uniqid() => $params]]);
        // Redis::hmset('basket', ['aaaa' => 'bbb']);
        // $result[uniqid()] = $params;
        // Redis::rpush('basket', json_encode($params));
        // $unique_id = uniqid();

        $request->session()->push('basket', json_encode($params));

        return redirect()->back();
    }
}
