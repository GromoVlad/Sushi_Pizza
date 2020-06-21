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
        <form method="POST" action="{{ route('topping.update', $topping) }}">
            @csrf
            @method('PUT')
            Название:<input type="text" name="name" value="{{$topping->name}}">
            <br>
            @foreach ($errors->get('name') as $message)
            {{$message}}<br>
            @endforeach
            Цена:<input name="price" type="number" value="{{$topping->price}}">
            <br>
            @foreach ($errors->get('price') as $message)
                {{$message}}<br>
            @endforeach
            Вес:<input name="weight" type="number" value="{{$topping->weight}}">
            <br>
            @foreach ($errors->get('weight') as $message)
                {{$message}}<br>
            @endforeach
            Категория:<br>
            <select name="category_id">
                <option disabled>Выберите категорию:</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                            @if ($topping->category->id == $category->id)
                            selected
                        @endif
                    >{{$category->name}}</option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="Сохранить">
        </form>
    </div>
</div>
</body>
</html>
