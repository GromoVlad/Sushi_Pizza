@extends('layouts.master')

@section('style', '../personal/account')
@section('title', 'Личный кабинет')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Данные профиля:</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.edit', Auth::user()) }}">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-2">
                            <div class="input-group-prepend prepend_size">
                                <span class="input-group-text prepend_size_span" id="basic-addon1">Имя</span>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Ваше имя"
                                   value="{{Auth::user()->name}}" aria-describedby="basic-addon1">
                        </div>
                        @foreach ($errors->get('name') as $message)
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @endforeach
                        <div class="input-group mb-2">
                            <div class="input-group-prepend prepend_size">
                                <span class="input-group-text prepend_size_span" id="basic-addon1">E-mail</span>
                            </div>
                            <input type="text" class="form-control" name="email" placeholder="E-mail"
                                   value="{{Auth::user()->email}}" aria-describedby="basic-addon1">
                        </div>
                        @foreach ($errors->get('email') as $message)
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @endforeach
                        <div class="input-group mb-2">
                            <div class="input-group-prepend prepend_size">
                                <span class="input-group-text prepend_size_span" id="basic-addon1">Телефон</span>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="Телефон"
                                   value="{{Auth::user()->phone}}" aria-describedby="basic-addon1">
                        </div>
                        @foreach ($errors->get('phone') as $message)
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @endforeach
                        <div class="input-group mb-2">
                            <div class="input-group-prepend prepend_size">
                                <span class="input-group-text prepend_size_span" id="basic-addon1">Адрес</span>
                            </div>
                            <input type="text" class="form-control" name="address" placeholder="Адрес"
                                   value="{{Auth::user()->address}}" aria-describedby="basic-addon1">
                        </div>
                        @foreach ($errors->get('address') as $message)
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-outline-info">Изменить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Изменить пароль:</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.password.edit', Auth::user()) }}">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-2">
                            <div class="input-group-prepend prepend_size_password">
                                <span class="input-group-text prepend_size_span" id="basic-addon1">Новый пароль</span>
                            </div>
                            <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                        </div>
                        @foreach ($errors->get('password') as $message)
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @endforeach
                        <div class="input-group mb-2">
                            <div class="input-group-prepend prepend_size_password">
                                <span class="input-group-text prepend_size_span" id="basic-addon1">Повторите пароль</span>
                            </div>
                            <input type="password" class="form-control" name="password_confirmation" aria-describedby="basic-addon1">
                        </div>
                        @foreach ($errors->get('password_confirmation') as $message)
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-outline-info">Изменить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">История заказов</div>
                <div class="card-body">
                    <form>
                        {{dump(Auth::user())}}
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<br>
<br>
@endsection
