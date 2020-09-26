@extends('layouts.master')

@section('style', 'index')
@section('title', 'Главная')

@section('content')
    <div class="main">
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
        <div class="product_and_pagination">
            <div class="product">
                @foreach($products as $product)
                    <div class="card shadow">
                        <a class="card_link" href="{{ route('product', $product->id) }}">
                            <img class="card_link_img" src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
                            <div class="card-body">
                                <p class="card_link_title">{{$product->name}}</p>
                                <p class="card_link_text">{{$product->description}}</p>
                                @foreach($product->sizeProduct as $sizeProduct)
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
            <div class="main_pagination">
                {{$products->links()}}
            </div>
        </div>
    </div>
@endsection
