@extends('layouts.master')

@section('title', 'Бренд')

@section('content')

        <h1>
            {{ $brand->name }} {{$brand->products->count()}}
        </h1>
        <p>
            {{ $brand->description }}
        </p>
        <div class="row">
            @foreach($brand->products as $product)
                @include('layouts.card', compact('product'))
            @endforeach
        </div>

@endsection
