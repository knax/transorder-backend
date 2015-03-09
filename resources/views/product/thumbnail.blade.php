@extends('layout.container')

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3">
                <div class="thumbnail">
                    <img class="product-photo-thumb" src="{{$product->photo}}">
                    <div class="caption">
                        <h3>{{$product->name}}</h3>
                        {{ Lang::get('product.price_per_piece', ['price' => $product->price()]) }}
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
