@extends('admin.layouts.master')

@section('style', 'topping')
@section('title', 'Создать топпинг')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Редактировать топпинг "{{$topping->name}}":</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('topping.update', $topping) }}">
                @csrf
                @method('PUT')
                <div class="input-group mb-2 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <span class="input-group-text prepend_size_span" id="basic-addon1">Название</span>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="Введите название продукта"
                           aria-describedby="basic-addon1" value="{{$topping->name}}">
                </div>
                @foreach ($errors->get('name') as $message)
                    <div class="alert alert-warning middle_input" role="alert">
                        {{$message}}
                    </div>
                @endforeach
                <div class="input-group mb-2 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <span class="input-group-text prepend_size_span" id="basic-addon1">Цена (₽)</span>
                    </div>
                    <input type="number" class="form-control" name="price" placeholder="Введите название продукта"
                           aria-describedby="basic-addon1" value="{{$topping->price}}">
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
                    <input type="number" class="form-control" name="weight" placeholder="Введите название продукта"
                           aria-describedby="basic-addon1" value="{{$topping->weight}}">
                </div>
                @foreach ($errors->get('weight') as $message)
                    <div class="alert alert-warning middle_input" role="alert">
                        {{$message}}
                    </div>
                @endforeach
                <div class="input-group mb-2 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <label class="input-group-text prepend_size_span" for="inputGroupSelect01">Категория</label>
                    </div>
                    <select name="category_id" class="custom-select" id="inputGroupSelect01">
                        <option disabled>Выберите категорию:</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                @if ($topping->category->id == $category->id)
                                    selected
                                @endif
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input class="btn btn btn-outline-info mb-2" type="submit" value="Сохранить">
            </form>
            <a class="btn btn-outline-success" href="{{ route('topping.index') }}">&#8592; К топпингам</a>
        </div>
    </div>
@endsection
