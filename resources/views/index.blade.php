@extends('layouts.master')

@section('title', 'Главная')

@section('content')


        <h1>Все товары</h1>

        <form method="GET" action="{{route("index")}}">
            <div class="filters row mb-5">
                <div class="col-sm-6 col-md-3">
                    <div class="row" style="margin-left: 30px;">
                        <label for="price_from">Цена от
                            <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">
                        </label>
                        <label for="price_to" style="margin-left: 34px;">до
                            <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 row" style="margin-left: -115px;">
                    <button type="submit" class="btn btn-primary">Фильтр</button>
                    <a href="{{ route("index") }}" class="btn btn-danger">Сброс</a>
                </div>
            </div>
        </form>

        <div class="row">
            @foreach($products as $product)
            @include('layouts.card', compact('product'))
            @endforeach
        </div>
    {{$products->links()}}

@endsection
