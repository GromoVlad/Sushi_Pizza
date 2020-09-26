@extends('admin.layouts.master')

@section('style', 'category')
@section('title', 'Категории')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Категории:</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <tr class="table_head">
                    <th class="table_head num">№</th>
                    <th class="table_head name">Название</th>
                    <th class="table_head name_db">Название в БД</th>
                    <th class="table_body stub_category"></th>
                    <th class="table_head act">Действия</th>
                </tr>
                @foreach($categories as $category)
                    <tr class="table_body">
                        <td class="table_body num">{{$category->id}}</td>
                        <td class="table_body name">{{$category->name}}</td>
                        <td class="table_body name_db">{{$category->name_db}}</td>
                        <td class="table_body stub_category"></td>
                        <td class="table_body act">
                            <div class="form">
                                <div class="group_one">
                                    <a  class="btn btn-outline-primary" type="button"
                                       href="{{ route('category.show', $category) }}">Открыть</a>
                                    <a class="btn btn-outline-dark" type="button"
                                       href="{{ route('category.edit', $category) }}">Редактировать</a>
                                    <form action="{{ route('category.destroy', $category) }}" method="POST">
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
            {{$categories->links()}}
            <a class="btn btn-outline-success mb-2" href="{{ route('category.create') }}">Создать</a>
            <div>
                <a class="btn btn-outline-info" href="{{ route('admin_index') }}">&#8592; На главную</a>
            </div>
        </div>
    </div>
@endsection
