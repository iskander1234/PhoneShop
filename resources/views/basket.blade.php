@extends('layouts.master')

@section('title', 'Корзина')

@section('content')

    <h2>Корзина</h2>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{route('product', [$product->brand->code , $product->code])}}">
                            <img height="56px" src="{{ Storage::url($product->image) }}">
                            {{$product->name}}
                        </a>
                    </td>
                    <td><span class="badge">{{ $product->pivot->count }}</span>
                        <div class="btn-group form-inline">
                            <form action="{{route('basket-remove', $product)}}" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                            <form action="{{route('basket-add', $product)}}" method="POST">
                                <button type="submit" class="btn btn-primary"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{$product->price}} тг</td>
                    <td>{{$product->getPriceForCount()}} тг</td>
                </tr>
            @endforeach

            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>{{$order->getFullPrice()}} тг</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-primary" href="{{route('basket-place')}}">Оформить заказ</a>
        </div>
    </div>

@endsection