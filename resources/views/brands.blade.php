@extends('layouts.master')

@section('title', 'Все бренды')

@section('content')

{{--        @foreach($brands as $brand)--}}
{{--            <div class="row">--}}

{{--                <a href="{{route('brand', $brand->code)}}">--}}
{{--                    <h2>{{$brand->name}}</h2>--}}
{{--                </a>--}}
{{--                <p>--}}
{{--                    {{$brand->description}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        @endforeach--}}

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Фото</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
            <tr>
                <td><img style="height: 100px; width: 100px;" src="{{ Storage::url($brand->image) }}"></td>
                <td><a href="{{route('brand', $brand->code)}}">
                        <h6>{{$brand->name}}</h6>
                    </a></td>
                <td>{{$brand->description}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

@endsection
