@extends('admin.layouts.master')

@section('style', 'topping')
@section('title', 'Топпинг: ' . $topping->name)

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Детальная информация о топпинге "{{$topping->name}}":</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <tr class="table_head">
                    <th class="table_head num_show center">№</th>
                    <th class="table_head name_show center">Название топпинга</th>
                    <th class="table_head category_show center">Категория</th>
                    <th class="table_head price_show center">Цена</th>
                    <th class="table_head weight_show center">Вес</th>
                </tr>
                <tr class="table_body">
                    <td class="table_body num_show">{{$topping->id}}</td>
                    <td class="table_body name_show">{{$topping->name}}</td>
                    <td class="table_body category_show">{{$topping->category->name}}</td>
                    <td class="table_body price_show center">{{$topping->price}} ₽</td>
                    <td class="table_body weight_show center">{{$topping->weight}} гр.</td>
                </tr>
            </table>
            <a class="btn btn-outline-success" href="{{ route('topping.index') }}">&#8592; К топпингам</a>
        </div>
    </div>
@endsection
