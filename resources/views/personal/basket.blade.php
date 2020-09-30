@extends('layouts.master')

@section('style', '../personal/basket')
@section('title', 'Корзина')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="category_basket">
            <div class="category">
                @foreach($categories as $category)
                    <div class="item_category">
                        <a class="item_category_text" href="{{ route('index', $category->name_db) }}">
                            <img class="item_category_icon" src="{{ Storage::url($category->image) }}" alt="{{$category->name}}">
                            {{$category->name}}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="card basket shadow">
                <div class="card-header">Корзина покупок</div>
                <div class="card-body center">
                    @if(!empty($basket))
                    <table class="table">
                        <tr class="table_head_block">
                            <th class="table_head head_image">Изображение</th>
                            <th class="table_head product_info">Наименование товара</th>
                            <th class="table_head">Цена</th>
                            <th class="table_head">Действия</th>
                        </tr>
                        @foreach($basket as $product)
                        <tr class="table_body_block">
                            <td class="table_body center">
                                <img class="image" src="{{ Storage::url($product['product_image']) }}" alt="{{-- $product_name --}}">
                            </td>
                            <td class="table_body product_info">
                                <p><b>{{$product['category_name']}}:</b> {{$product['product_name']}}</p>
                                <p><b>Размер:</b> {{$product['size']}}</p>
                                <p><b>Вес:</b> {{$product['weight']}} гр.</p>
                                @if(isset($product['topping_one_name']))
                                    <p><b>Топпинги:</b> {{$product['topping_one_name']}} (+ {{$product['topping_one_weight']}} гр.)</p>
                                @endif
                                @if(isset($product['topping_two_name']))
                                    <p><b>Топпинги:</b> {{$product['topping_two_name']}} (+ {{$product['topping_two_weight']}} гр.)</p>
                                @endif
                            </td>
                            <td class="table_body "><h5><b>{{$product['full_price']}} ₽<b></h5></td>
                            <td class="table_body">
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input  class="btn btn-outline-danger input_delete" type="submit" value="Удалить">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <h3 class="center">Ваша корзина пуста</h3>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
<br>
<br>
@endsection
