@extends('layouts.master')

@section('style', 'product')
@section('title', 'Заказать продукт: ' . $product->name)

@section('content')
    <div id="app" class="main">
        <div class="category">
            @foreach($categories as $category)
                <div class="item_category">
                    <a class="item_category_text" href="{{ route('index', $category->name_db) }}">
                        <img class="item_category_icon" src="{{ Storage::url($category->image) }}" alt="{{$category->name}}">
                        {{$category->name}}
                    </a>
                </div>
            @endforeach
        </div>
        <div class="product">
            <img class="product_img shadow-lg" src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
            <form class="product_order" method="POST" action="{{ route('basket.product.add') }}">
                @csrf
                <div class="card shadow-lg">
                    <div class="card-body">
                        <p class="card_title">{{$product->name}}</p>
                        <p class="card_link_text">{{$product->description}}</p>
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <h5 class="header_size">Размер:</h5>
                        @foreach($product->sizeProduct as $sizeProduct)
                            <div class="input-group string_product">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="size_product_id" id="size_product_{{$sizeProduct->id}}"
                                               value="{{$sizeProduct->id}}" checked>
                                    </div>
                                </div>
                                <label class="form-control label_size" for="size_product_{{$sizeProduct->id}}">
                                    {{ $sizeProduct->size }} ({{ $sizeProduct->weight }} гр.): {{ $sizeProduct->price }} ₽
                                </label>
                            </div>
                        @endforeach
                        <br>
                        <h5 class="header_size">Топпинги:</h5>
                        @foreach($product->topping as $topping)
                            <div class="input-group string_product">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="topping[]" id="topping_{{$topping->id}}"
                                               value="{{$topping->id}}">
                                    </div>
                                </div>
                                <label class="form-control label_size" for="topping_{{$topping->id}}">
                                    {{$topping->name}}: (+{{$topping->price}} ₽/{{$topping->weight}} гр.)
                                </label>
                            </div>
                        @endforeach
                        <br>
                        <div class="add_basket ">
                            <price-product></price-product>
                            <span class="span_count">
                                <img class="span_icons" src="https://img.icons8.com/material-outlined/24/000000/minus-math.png"/>
                                <span class="span_count_number">1</span>
                                <img class="span_icons" src="https://img.icons8.com/material-outlined/24/000000/plus-math.png"/>
                            </span>
                            <button type="submit" class="btn btn-outline-success">В корзину</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <h3 class="header_offered_products">ПОПРОБУЙТЕ ЕЩЁ</h3>
    <div class="offered_products">
        @foreach($offeredProducts as $offeredProduct)
            <div class="card shadow">
                <a class="card_link" href="{{ route('product', $offeredProduct->id) }}">
                    <img class="card_link_img" src="{{ Storage::url($offeredProduct->image) }}" alt="{{$offeredProduct->name}}">
                    <div class="card-body">
                        <p class="card_link_title">{{$offeredProduct->name}}</p>
                        <p class="card_link_text">{{$offeredProduct->description}}</p>
                        @foreach($offeredProduct->sizeProduct as $sizeProduct)
                            <div class="card_link_specifications">
                                <div class="card_link_size">{{ $sizeProduct->size }} ({{ $sizeProduct->weight }} гр.):</div>
                                <div class="card_link_price">{{ $sizeProduct->price }} ₽</div>
                            </div>
                        @endforeach
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
