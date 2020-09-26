@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'Продукт: ' . $product->name)

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Детальная информация о продукте "{{$product->name}}":</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <tr class="table_head">
                    <th class="table_head num">№</th>
                    <th class="table_head name">Название</th>
                    <th class="table_head category">Категория</th>
                    <th class="table_head setting">
                        <div class="size_show">Размер</div>
                        <div class="price_show">Цена</div>
                        <div class="weight_show">Вес</div>
                    </th>
                    <th class="table_head desc center">Описание</th>
                    <th class="table_head topping">Доступные топпинги</th>
                </tr>
                <tr>
                    <td class="table_body num">{{$product->id}}</td>
                    <td class="table_body name">{{$product->name}}</td>
                    <td class="table_body category">{{$product->category->name}}</td>
                    <td class="table_body setting">
                        @foreach($product->sizeProduct as $size)
                            <div class="div_setting">
                                <div class="center">{{$size->size}}</div>
                                <div class="center">{{$size->price}} ₽</div>
                                <div class="center">{{$size->weight}} гр.</div>
                            </div>
                        @endforeach
                    </td>
                    <td class="table_body desc">{{$product->description}}</td>
                    <td class="table_body topping">
                        @foreach($product->topping as $activeTopping)
                            {{ $activeTopping->name }}<br>
                        @endforeach
                    </td>
                </tr>
            </table>
            <div class="right_block">
                @if(!is_null($product->image))
                    <div class="card mb-2 margin_top_null">
                        <div class="card-body">
                            <h6 class="card-text">Текущее изображение продукта:</h6>
                        </div>
                        <div class="image mb-4">
                            <img src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
                        </div>
                    </div>
                @else
                    <div class="mb-2">
                        <input class="form-control input_text_gray" type="text" placeholder="Изображения продукта нет" readonly>
                    </div>
                @endif
            </div>
            <a class="btn btn-outline-success" type="button" href="{{ route('products.index') }}">&#8592; К продуктам</a>
        </div>
    </div>
@endsection
