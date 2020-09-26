@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'Редактировать категорию: ' . $category->name)

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Редактировать категорию "{{$category->name}}"</h4>
        </div>
        <div class="card two_block">
            <div class="left_block">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('category.update', $category) }}">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-2">
                            <div class="input-group-prepend prepend_size">
                                <span class="input-group-text prepend_size_span" id="basic-addon1">Название</span>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Введите название категории"
                                   value="{{$category->name}}" aria-describedby="basic-addon1">
                        </div>
                        @foreach ($errors->get('name') as $message)
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @endforeach
                        <div class="input-group mb-2">
                            <div class="input-group-prepend prepend_size">
                                <span class="input-group-text prepend_size_span" id="basic-addon1">Имя в БД</span>
                            </div>
                            <input type="text" class="form-control" name="name_db"
                                   placeholder="Название категории для БД(без пробелов, на латинице)"
                                   value="{{$category->name_db}}" aria-describedby="basic-addon1">
                        </div>
                        @foreach ($errors->get('name_db') as $message)
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @endforeach
                        <div class="input-group mb-3">
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
            <div class="right_block">
                <div class="card-body">
                    @if(!is_null($category->image))
                        <div class="card mb-2 margin_top_null">
                            <div class="card-body">
                                <h6 class="card-text">Текущее изображение категории:</h6>
                            </div>
                            <div class="image mb-4">
                                <img class="image_icon" src="{{ Storage::url($category->image) }}" alt="{{$category->name}}">
                            </div>
                        </div>
                    @else
                        <div class="mb-2">
                            <input class="form-control input_text_gray" type="text" placeholder="Изображения продукта нет" readonly>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
