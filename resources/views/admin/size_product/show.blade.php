@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'SKU для продукта: ' . $product->name)

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Подробная информация SKU для продукта "{{$product->name}}":</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <tr class="table_head">
                    <th class="table_head num_size_product">№ продукта</th>
                    <th class="table_head center name">Название продукта</th>
                    <th class="table_head num_size_product">№ SKU</th>
                    <th class="table_head size center size_size_product">Размер</th>
                    <th class="table_head price center price_size_product">Цена</th>
                    <th class="table_head weight center weight_size_product">Вес</th>
                </tr>
                <tr class="table_body">
                    <td class="table_body num_size_product">{{ $product->id }}</td>
                    <td class="table_body name name_center">{{ $product->name }}</td>
                    <td class="table_body num_size_product">{{ $sizeProduct->id }}</td>
                    <td class="table_body size center size_size_product">{{ $sizeProduct->size }}</td>
                    <td class="table_body price center price_size_product">{{ $sizeProduct->price }} ₽</td>
                    <td class="table_body weight center weight_size_product">{{ $sizeProduct->weight }} гр.</td>
                </tr>
            </table>
            <a class="btn btn-outline-success" href="{{ route('size_product.index', $product) }}">&#8592; К продукту</a>
        </div>
    </div>
@endsection
