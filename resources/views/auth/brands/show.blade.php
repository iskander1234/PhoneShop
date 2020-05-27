@extends('auth.layouts.master')

@section('title', 'Бренды' . $brand->name)

@section('content')
    <div class="col-md-12">
        <h1>Бренд</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $brand->id }}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $brand->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $brand->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $brand->description }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($brand->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Кол-во товаров</td>
                <td>{{ $brand->products->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
