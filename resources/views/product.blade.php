@extends('layouts.master')

@section('title', 'Продукт')

@section('content')

        <h1>???</h1>
        <h2>{{$product}}</h2>
        <h2>???</h2>
        <p>Цена: <b>0 тг</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>????</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="Y238avD3gDKn8pPnFA5VoLkOqHHyJ5lhcFHmeXij">
        </form>

@endsection
