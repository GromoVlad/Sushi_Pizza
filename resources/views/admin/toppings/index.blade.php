@extends('admin.layouts.master')

@section('style', 'topping')
@section('title', 'Топпинги')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Топпинги:</h4>
        </div>
        <form class="filter_topping" method="GET" action="{{ route('topping.index') }}">
            @csrf
            <div class="input-group input-group_topping">
                <div class="input-group-prepend prepend_size_topping">
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
            <button class="btn btn btn-outline-info btn_topping">Отфильтровать</button>
        </form>
        <div class="card-body">
            <table class="table">
                <tr class="table_head">
                    <th class="table_head num">№</th>
                    <th class="table_head name">Название</th>
                    <th class="table_head category center">Категория</th>
                    <th class="table_head price center">Цена</th>
                    <th class="table_head weight center">Вес</th>
                    <th class="table_head act">Действия</th>
                </tr>
                @foreach($toppings as $topping)
                    <tr>
                        <td class="table_body num">{{$topping->id}}</td>
                        <td class="table_body name">{{$topping->name}}</td>
                        <td class="table_body category justify_center">{{$topping->category->name}}</td>
                        <td class="table_body price center">{{$topping->price}} ₽</td>
                        <td class="table_body weight center">{{$topping->weight}} гр.</td>
                        <td class="table_body act">
                            <div class="form">
                                <div class="group_one">
                                    <a class="btn btn-outline-primary" type="button"
                                       href="{{ route('topping.show', $topping) }}">Открыть</a>
                                    <a class="btn btn-outline-dark" type="button"
                                       href="{{ route('topping.edit', $topping) }}">Редактировать</a>
                                    <form action="{{ route('topping.destroy', $topping) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input  class="btn btn-outline-danger" type="submit" value="Удалить">
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$toppings->links()}}
            <a class="btn btn-outline-success mb-2" href="{{ route('topping.create') }}">Создать</a>
            <div>
                <a class="btn btn-outline-info" href="{{ route('admin_index') }}">&#8592; На главную</a>
            </div>
        </div>
    </div>
@endsection
