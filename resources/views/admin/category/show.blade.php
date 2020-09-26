@extends('admin.layouts.master')

@section('style', 'category')
@section('title', 'Категория: "' . $category->name . '"')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Детальная информация о категории "{{$category->name}}":</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <tr class="table_head">
                    <th class="table_head num">№</th>
                    <th class="table_head name center">Название</th>
                    <th class="table_head name_db center">Название в БД</th>
                    <th class="table_head image center">Изображение</th>
                    <th class="table_head all_products center">Продукты, относящиеся к этой категории</th>
                </tr>
                <tr class="table_body">
                    <td class="table_body num">{{$category->id}}</td>
                    <td class="table_body name justify_center">{{$category->name}}</td>
                    <td class="table_body name_db justify_center">{{$category->name_db}}</td>
                    <td class="table_body image justify_center">
                        @if(!is_null($category->image))

                                    <img class="image_icon" src="{{ Storage::url($category->image) }}" alt="{{$category->name}}">

                        @else
                            <span>Изображения продукта нет</span>
                        @endif
                    </td>
                    <td class="table_body all_products center">
                        @foreach($category->product as $product)
                            {{$product->name}} <br>
                        @endforeach
                    </td>

                </tr>
            </table>




            <a class="btn btn-outline-success" type="button" href="{{ route('category.index') }}">&#8592; К категориям</a>
        </div>
    </div>
@endsection
