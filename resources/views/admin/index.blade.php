@extends('admin.layouts.master')

@section('style', 'category')
@section('title', 'Категории')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="header_text_card">Админка:</h4>
        </div>
        <div class="card-body">
            <a class="btn btn-outline-info btn-lg btn-block middle_input" href="{{ route('category.index') }}">Категории</a>
            <a class="btn btn-outline-info btn-lg btn-block middle_input" href="{{ route('products.index') }}">Продукты</a>
            <a class="btn btn-outline-info btn-lg btn-block middle_input" href="{{ route('topping.index') }}">Топпинги</a>
        </div>
    </div>
@endsection
