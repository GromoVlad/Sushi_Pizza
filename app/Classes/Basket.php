<?php

namespace App\Classes;

use App\Models\Product;
use Illuminate\Http\Request;

class Basket
{
    private $basket;
    private $product;
    private $resultPrice = 0;

    public function __construct(Request $request)
    {
        if (isset($request->session()->all()['basket'])) {
            foreach ($request->session()->all()['basket'] as $id => $merchandise) {
                $merchandise = json_decode($merchandise);
                $this->product($id, $merchandise->product_id);
                $this->category($id);
                $this->sizeProduct($id, $merchandise->size_product_id);
                if (isset($merchandise->topping_id_one)) {
                    $this->toppingOne($id, $merchandise->topping_id_one);
                }
                if (isset($merchandise->topping_id_two)) {
                    $this->toppingTwo($id, $merchandise->topping_id_two);
                }
            }
            $this->resultPrice();
        }
    }

    public function getBasket()
    {
        return $this->basket;
    }

    public function getResultPrice()
    {
        return $this->resultPrice;
    }

    private function resultPrice()
    {
        if(isset($this->basket)){
            foreach ($this->basket as $val) {
                $this->resultPrice += $val['full_price'];
            }
        }
    }

    private function product($id, $product_id)
    {
        $this->product = Product::where('id', $product_id)->first();
        $this->basket[$id]['product_name'] = $this->product->name;
        $this->basket[$id]['product_image'] = $this->product->image;
    }

    private function sizeProduct($id, $sizeProductId)
    {
        $sizeProduct = $this->product->sizeProduct()->where('id', $sizeProductId)->first();
        $this->basket[$id]['size'] = $sizeProduct->size;
        $this->basket[$id]['price'] = $sizeProduct->price;
        $this->basket[$id]['weight'] = $sizeProduct->weight;
        $this->basket[$id]['full_price'] = $sizeProduct->price;
    }

    private function category($id)
    {
        $category = $this->product->category()->first();
        $this->basket[$id]['category_name'] = $category->name;
    }

    private function toppingOne($id, $toppingOneId)
    {
        $toppingOne = $this->product->topping->where('id', $toppingOneId)->first();
        $this->basket[$id]['topping_one_name'] = $toppingOne->name;
        $this->basket[$id]['topping_one_price'] = $toppingOne->price;
        $this->basket[$id]['topping_one_weight'] = $toppingOne->weight;
        $this->basket[$id]['full_price'] += $toppingOne->price;
    }

    private function toppingTwo($id, $toppingTwoId)
    {
        $toppingTwo = $this->product->topping->where('id', $toppingTwoId)->first();
        $this->basket[$id]['topping_two_name'] = $toppingTwo->name;
        $this->basket[$id]['topping_two_price'] = $toppingTwo->price;
        $this->basket[$id]['topping_two_weight'] = $toppingTwo->weight;
        $this->basket[$id]['full_price'] += $toppingTwo->price;
    }
}
