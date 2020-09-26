@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'SKU для продукта')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">SKU для продукта "{{$product->name}}":</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <tr class="table_head">
                    <th class="table_head num">№</th>
                    <th class="table_head size center">Размер</th>
                    <th class="table_head price center">Цена</th>
                    <th class="table_head weight center">Вес</th>
                    <th class="table_head stub"></th>
                    <th class="table_head act size_product">Действия</th>
                </tr>
                @foreach($product->sizeProduct as $sizeProduct)
                    <tr>
                        <td class="table_body num">{{$sizeProduct->id}}</td>
                        <td class="table_body size">{{$sizeProduct->size}}</td>
                        <td class="table_body price">{{$sizeProduct->price}} ₽</td>
                        <td class="table_body weight">{{$sizeProduct->weight}} гр.</td>
                        <td class="table_body stub"></td>
                        <td class="table_body act size_product">
                            <a class="btn btn-outline-primary margin_button" type="button"
                               href="{{ route('size_product.show', [$product, $sizeProduct]) }}">Открыть</a>
                            <a class="btn btn-outline-dark margin_button" type="button"
                               href="{{ route('size_product.edit', [$product, $sizeProduct]) }}">Редактировать</a>
                            <form action="{{ route('size_product.destroy', [$product, $sizeProduct]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-outline-danger margin_button" type="submit" value="Удалить">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a class="btn btn-outline-info mb-2" type="button" href="{{ route('size_product.create', $product) }}">Создать новый SKU</a>
            <div>
                <a class="btn btn-outline-success mb-2" href="{{ route('products.index') }}">&#8592; К продуктам</a>
            </div>
        </div>
    </div>
@endsection
