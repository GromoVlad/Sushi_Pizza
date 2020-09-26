<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/css/main/master.css">
    <link rel="stylesheet" href="/resources/css/main/@yield('style').css">
</head>
<body>
<div class="flex-center position-ref full-height site">
    <div class="content header_content">
        <a class="header_logo" href="{{ route('index') }}">
            <p class="header_logo_text">
                <span class="green">СУШИ</span>
                <br>
                <span class="blue">ПИЦЦА</span>
            </p>
            <img class="logo_image" src="{{ Storage::url('/bg/logo.png') }}" alt="Лого">
        </a>
        <div class="header_phone">
            <p class="header_phone_text">8(910)557-55-75</p>
            <p class="header_phone_text">8(920)772-77-27</p>
            <p class="header_phone_text">8(920)775-55-66</p>
            <p class="header_time">Пн-Пт с 10:00 до 22:30 <br>Сб, Вс с 11:00 до 22:30</p>
        </div>
        <div></div>
        <div class="header_basket">
            <a class="header_basket_cart" href="">
                <svg width="1.7rem" height="1.7rem" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
                <span>Корзина (?)</span>
            </a>
            @guest
            @if (Route::has('register'))
                <a class="header_basket_personal" href="{{ route('register') }}">
                    <svg width="1.7rem" height="1.7rem" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    <span>Регистрация</span>
                </a>
            @endif
                <a class="header_basket_personal" href="{{ route('login') }}">
                    <svg width="1.7rem" height="1.7rem" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    <span>Войти</span>
                </a>
            @endguest
            @auth
                <a class="header_basket_personal" href="{{ route('account') }}">
                    <svg width="1.7rem" height="1.7rem" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    <span>Личный кабинет</span>
                </a>
                <a class="header_basket_personal pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg width="1.7rem" height="1.7rem" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                    <span>Выйти</span>
                </a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </div>
    </div>
    @if (Route::has('login'))
        <div class="head_wrapper">
            <div class="head_wrapper_color">
                <div class="top-left links">
                    <a href="{{ route('index') }}">Меню</a>
                    <a href="{{ route('index') }}">Акции</a>
                    <a href="{{ route('index') }}">Доставка</a>
                    <a href="https://vk.com/vikkiners">Отзывы</a>
                    <a href="{{ route('index') }}">Контакты</a>
                    @if(Auth::user() != null && Auth::user()->is_admin === 1)
                        <a href="{{ route('admin_index') }}">Админка</a>
                    @endif
                </div>
            </div>
        </div>
    @endif
    <div class="content site_content">
        @yield('content')
    </div>
    <div class="background_footer shadow">
        <div class="content footer">
            <div class="footer_phone">
                <p class="header_phone_text">8(910)557-55-75</p>
                <p class="header_phone_text">8(920)772-77-27</p>
                <p class="header_phone_text">8(920)775-55-66</p>
            </div>
            <a class="footer_logo" href="{{ route('index') }}">
                <p class="header_logo_text">
                    <span class="green">СУШИ</span>
                    <br>
                    <span class="blue">ПИЦЦА</span>
                </p>
                <img class="logo_image" src="{{ Storage::url('/bg/logo.png') }}" alt="Лого">
            </a>
            <div class="footer_site-maps">
                <a href="{{ route('index') }}">Меню</a>
                <a href="{{ route('index') }}">Акции</a>
                <a href="{{ route('index') }}">Доставка</a>
                <a href="https://vk.com/vikkiners">Отзывы</a>
                <a href="{{ route('index') }}">Контакты</a>
            </div>
        </div>
        <a class="develop" href="https://github.com/GromoVlad">Создание сайта: GromoVlad</a>
    </div>
</div>
</body>
</html>
