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
        <table>
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a class="btn btn-success" type="button"
                           href="{{ route('category.show', $category) }}">Открыть</a>
                        <a class="btn btn-warning" type="button"
                           href="{{ route('category.edit', $category) }}">Редактировать</a>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Удалить">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('category.create') }}">Создать</a>
    </div>
</div>
</body>
</html>
