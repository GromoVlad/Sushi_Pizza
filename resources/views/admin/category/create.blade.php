@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'Создать категорию')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Создать новую категорию продуктов:</h4>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('category.store') }}">
                @csrf
                <div class="input-group mb-2 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <span class="input-group-text prepend_size_span" id="basic-addon1">Название</span>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="Введите название категории"
                           aria-describedby="basic-addon1">
                </div>
                @foreach ($errors->get('name') as $message)
                    <div class="alert alert-warning middle_input" role="alert">
                        {{$message}}
                    </div>
                @endforeach
                <div class="input-group mb-2 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <span class="input-group-text prepend_size_span" id="basic-addon1">Имя в БД</span>
                    </div>
                    <input type="text" class="form-control" name="name_db"
                           placeholder="Название категории для БД(без пробелов, на латинице)"
                           aria-describedby="basic-addon1">
                </div>
                @foreach ($errors->get('name_db') as $message)
                    <div class="alert alert-warning middle_input" role="alert">
                        {{$message}}
                    </div>
                @endforeach
                <div class="input-group mb-3 middle_input">
                    <div class="input-group-prepend prepend_size">
                        <span class="input-group-text prepend_size_span fs_small" id="inputGroupFileAddon01">Фото</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input"
                               accept="image/jpg, image/jpeg, image/png"
                               id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label fs_16px" for="inputGroupFile01">Выберите файл</label>
                    </div>
                </div>
                <input class="btn btn btn-outline-info mb-2" type="submit" value="Сохранить">
            </form>
            <a class="btn btn-outline-success" href="{{ route('category.index') }}">&#8592; К категориям</a>
        </div>
    </div>
@endsection
