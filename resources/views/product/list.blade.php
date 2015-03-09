@extends('layout.container')

@section('content')
    <div class="list-group">
        @foreach($products as $product)
            <a href="{{URL::route('product.detail', ['id' => $product->id])}}" class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="{{$product->photo}}">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$product->name}}</h4>
                        {{ Lang::get('product.price_per_piece', ['price' => $product->price()]) }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
