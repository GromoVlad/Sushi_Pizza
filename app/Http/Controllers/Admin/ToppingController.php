<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ToppingRequest;
use App\Models\Category;
use App\Models\Topping;

class ToppingController extends Controller
{
    public function index()
    {
        $toppings = Topping::get();
        return view('toppings.index', compact('toppings'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('toppings.create', compact('categories'));
    }

    public function store(ToppingRequest $request)
    {
        Topping::create($request->all());
        return redirect()->route('topping.index');
    }

    public function show(Topping $topping)
    {
        return view('toppings.show', compact('topping'));
    }

    public function edit(Topping $topping)
    {
        $categories = Category::get();
        return view('toppings.edit', compact('topping', 'categories'));
    }

    public function update(ToppingRequest $request, Topping $topping)
    {
        $topping->update($request->all());
        return redirect()->route('topping.index');
    }

    public function destroy(Topping $topping)
    {
        $topping->delete();
        return redirect()->route('topping.index');
    }


}
