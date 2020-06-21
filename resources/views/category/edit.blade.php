<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('index') }}">Главная</a>
            @else
                <a href="{{ route('login') }}">Войти</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Регистрация</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <form method="POST" action="{{ route('category.update', $category) }}">
            @csrf
            @method('PUT')
            Название:<input type="text" name="name" value="{{$category->name}}">
            <br>
            @foreach ($errors->get('name') as $message)
            {{$message}}<br>
            @endforeach
            <input type="submit" value="Сохранить">
        </form>
    </div>
</div>
</body>
</html>
