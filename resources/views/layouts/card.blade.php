<div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="    border-radius: 120px; " >
        <img style="max-height: 180px; margin-top: 15px; border-radius: 10px" src="{{ Storage::url($product->image) }}" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} тг</p>
            <p>
            <form action="{{route('basket-add', $product)}}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{route('product', [$product->brand->code, $product->code])}}"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>