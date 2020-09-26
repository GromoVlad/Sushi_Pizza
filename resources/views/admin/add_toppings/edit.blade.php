@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'Добавить активные топпинги')

@section('content')
    @if(empty($product->category->topping[0]))
        <div class="card">
            <div class="card-header">
                <h4 class="header_text_card">Добавить активные топпинги для продукта: "{{$product->name}}"</h4>
            </div>
            <div class="card-body">
                <br>
                <h6>Активных топпингов для продукта "{{$product->name}}" нет</h6>
                <br>
                <a class="btn btn-outline-success" href="{{ route('products.index') }}">&#8592; К продуктам</a>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-header">
                <h4 class="header_text_card">Добавить активные топпинги для продукта: "{{$product->name}}"</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('saveToppings', $product) }}">
                    @csrf
                    @method('PUT')
                    @foreach($product->category->topping as $topping)
                        <div class="input-group topping_margin">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="active_topping[]" id="topping_{{$topping->id}}"
                                        @foreach($product->topping as $activeTopping)
                                            @if($topping->id === $activeTopping->id)
                                                checked
                                            @endif
                                        @endforeach
                                    value="{{$topping->id}}">
                                </div>
                            </div>
                            <label for="topping_{{$topping->id}}" class="form-control topping_fs
                                @foreach($product->topping as $activeTopping)
                                    @if($topping->id === $activeTopping->id)
                                        green
                                    @endif
                                @endforeach
                            ">
                           {{$topping->name}}
                            </label>
                        </div>
                    @endforeach
                    <br>
                    <input class="btn btn btn-outline-info mb-2" type="submit" value="Сохранить">
                </form>
            <a class="btn btn-outline-success" href="{{ route('products.index') }}">&#8592; К продуктам</a>
        </div>
    </div>
    @endif
@endsection
