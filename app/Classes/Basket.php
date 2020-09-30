<?php


namespace App\Classes;


use Illuminate\Http\Request;

class Basket
{
    public function __construct(Request $request)
    {
        dump($request->session()->all()['basket']);
    }
}
