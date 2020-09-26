@extends('admin.layouts.master')

@section('style', 'product')
@section('title', 'Редактировать продукт: ' . $product->name)

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Редактировать информацию о продукте "{{$product->name}}":</h4>
        </div>
    </div>
    <div class="card two_block">
        <div class="left_block">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('products.update', $product) }}">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-2">
                        <div class="input-group-prepend prepend_size">
                            <span class="input-group-text prepend_size_span" id="basic-addon1">Название</span>
                        </div>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}" aria-describedby="basic-addon1">
                    </div>
                    @foreach ($errors->get('name') as $message)
                        <div class="alert alert-warning" role="alert">
                            {{$message}}
                        </div>
                    @endforeach
                    <div class="input-group mb-2">
                        <div class="input-group-prepend prepend_size">
                            <span class="input-group-text prepend_size_span">Описание</span>
                        </div>
                        <textarea rows="4" class="form-control" name="description">{{$product->description}}</textarea>
                    </div>
                    @foreach ($errors->get('description') as $message)
                        <div class="alert alert-warning" role="alert">
                            {{$message}}
                        </div>
                    @endforeach
                    <div class="input-group mb-2">
                        <div class="input-group-prepend prepend_size">
                            <label class="input-group-text prepend_size_span" for="inputGroupSelect01">Категория</label>
                        </div>
                        <select name="category_id" class="custom-select" id="inputGroupSelect01">
                            <option disabled>Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @if ($product->category->id == $category->id)
                                        selected
                                    @endif
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend prepend_size">
                            <span class="input-group-text prepend_size_span fs_small" id="inputGroupFileAddon01">Фото</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" accept="image/jpg, image/jpeg, image/png"
                                   id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label fs_16px" for="inputGroupFile01">Выберите файл</label>
                        </div>
                    </div>
                    <button class="btn btn btn-outline-info mb-2">Сохранить</button>
                </form>
                <a class="btn btn-outline-success" href="{{ route('products.index') }}">&#8592; К продуктам</a>
            </div>
        </div>
        <div class="right_block">
            <div class="card-body">
                @if(!is_null($product->image))
                    <div class="card mb-2 margin_top_null">
                        <div class="card-body">
                            <h6 class="card-text">Текущее изображение продукта:</h6>
                        </div>
                        <div class="image mb-4">
                            <img src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
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
@endsection
