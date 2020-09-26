@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'Редактировать для SKU продукта: ' . $product->name)

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Редактировать SKU для продукта: "{{$product->name}}"</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('size_product.update', [$product, $sizeProduct]) }}">
                @csrf
                @method('PUT')
                <div class="input-group mb-2 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <span class="input-group-text prepend_size_span" id="basic-addon1">Размер</span>
                    </div>
                    <input type="text" class="form-control" name="size" placeholder="Введите размер продукта"
                           value="{{$sizeProduct->size}}" aria-describedby="basic-addon1">
                </div>
                @foreach ($errors->get('size') as $message)
                    <div class="alert alert-warning middle_input" role="alert">
                        {{$message}}
                    </div>
                @endforeach
                <div class="input-group mb-2 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <span class="input-group-text prepend_size_span" id="basic-addon1">Цена (₽)</span>
                    </div>
                    <input type="number" class="form-control" name="price" placeholder="Введите цену продукта"
                           value="{{$sizeProduct->price}}" aria-describedby="basic-addon1">
                </div>
                @foreach ($errors->get('price') as $message)
                    <div class="alert alert-warning middle_input" role="alert">
                        {{$message}}
                    </div>
                @endforeach
                <div class="input-group mb-2 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <span class="input-group-text prepend_size_span" id="basic-addon1">Вес (гр)</span>
                    </div>
                    <input type="number" class="form-control" name="weight" placeholder="Введите вес продукта"
                           value="{{$sizeProduct->weight}}" aria-describedby="basic-addon1">
                </div>
                @foreach ($errors->get('weight') as $message)
                    <div class="alert alert-warning middle_input" role="alert">
                        {{$message}}
                    </div>
                @endforeach
                <input class="btn btn btn-outline-info mb-2" type="submit" value="Сохранить">
            </form>
            <a class="btn btn-outline-success" href="{{ route('size_product.index', $product) }}">&#8592; К продукту</a>
        </div>
    </div>
@endsection
