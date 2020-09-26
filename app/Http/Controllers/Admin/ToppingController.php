<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ToppingRequest;
use App\Models\Category;
use App\Models\Topping;
use Illuminate\Http\Request;

class ToppingController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();
        if ($request->category_id != 0) {
            $toppings = Topping::where('category_id', $request->category_id)->with('category')->paginate(10)->withPath("?" . $request->getQueryString());
        } else {
           $toppings = Topping::with('category')->paginate(10);
        }
        return view('admin.toppings.index', compact('toppings', 'categories'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.toppings.create', compact('categories'));
    }

    public function store(ToppingRequest $request)
    {
        Topping::create($request->all());
        return redirect()->route('topping.index');
    }

    public function show(Topping $topping)
    {
        return view('admin.toppings.show', compact('topping'));
    }

    public function edit(Topping $topping)
    {
        $categories = Category::get();
        return view('admin.toppings.edit', compact('topping', 'categories'));
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
