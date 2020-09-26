@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'Продукты')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Продукты:</h4>
        </div>
        <form class="filter_category" method="GET" action="{{ route('products.index') }}">
            @csrf
            <div class="input-group input-group_category">
                <div class="input-group-prepend prepend_size_category">
                    <label class="input-group-text prepend_size_span" for="inputGroupSelect01">Фильтр по категории:</label>
                </div>
                <select name="category_id" class="custom-select" id="inputGroupSelect01">
                    <option disabled>Выберите категорию</option>
                    <option value="0">Все категории</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                            @if(request()->category_id == $category->id)
                                selected
                            @endif
                        >{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn btn-outline-info btn_category">Отфильтровать</button>
        </form>
        <div class="card-body">
            <table class="table">
                <tr class="table_head">
                    <th class="table_head num">№</th>
                    <th class="table_head name">Название</th>
                    <th class="table_head category">Категория</th>
                    <th class="table_head sku">SKU</th>
                    <th class="table_head desc center">Описание</th>
                    <th class="table_head act">Действия</th>
                </tr>
                @foreach($products as $product)
                    <tr class="table_body">
                        <td class="table_body num">{{$product->id}}</td>
                        <td class="table_body name">{{$product->name}}</td>
                        <td class="table_body category">{{$product->category->name}}</td>
                        <td class="table_body sku">{{count($product->sizeProduct)}}</td>
                        <td class="table_body desc">{{$product->description}}</td>
                        <td class="table_body act">
                            <div class="form">
                                <div class="group_one">
                                    <a class="btn btn-outline-primary" type="button"
                                       href="{{ route('products.show', $product) }}">Открыть</a>
                                    <a class="btn btn-outline-dark" type="button"
                                       href="{{ route('products.edit', $product) }}">Редактировать</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-outline-danger" type="submit" value="Удалить">
                                    </form>
                                </div>
                                <div class="group_one">
                                    <a class="btn btn-outline-info" type="button"
                                       href="{{ route('size_product.index', $product) }}">Добавить SKU</a>
                                    <a class="btn btn-outline-success" type="button"
                                       href="{{ route('addToppings', $product) }}">Добавить Топпинги</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$products->links()}}
            <a class="btn btn-outline-success mb-2" type="button" href="{{ route('products.create') }}">Создать</a>
            <div>
                <a class="btn btn-outline-info" href="{{ route('admin_index') }}">&#8592; На главную</a>
            </div>
        </div>
    </div>
@endsection
