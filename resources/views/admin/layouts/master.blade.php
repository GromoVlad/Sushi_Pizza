<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/css/admin/master.css">
    <link rel="stylesheet" href="/resources/css/admin/@yield('style').css">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="head_wrapper">
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
        </div>
    @endif
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
