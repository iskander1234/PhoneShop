@extends('auth.layouts.master')

@isset($brand)
    @section('title', 'Редактировать бренда ' . $brand->name)
@else
    @section('title', 'Создать бренд')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($brand)
            <h1>Редактировать Бренд <b>{{ $brand->name }}</b></h1>
        @else
            <h1>Добавить Бренд</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($brand)
              action="{{ route('brands.update', $brand) }}"
              @else
              action="{{ route('brands.store') }}"
            @endisset
        >
            <div>
                @isset($brand)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code"
                               value="@isset($brand){{ $brand->code }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($brand){{ $brand->name }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
							<textarea name="description" id="description" cols="72"
                                      rows="7">@isset($brand){{ $brand->description }}@endisset</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
