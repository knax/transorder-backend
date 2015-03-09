@extends('layout.container')

@section('content')
    <ul class="list-group">
        @foreach($products as $product)
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="{{$product->photo}}">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$product->name}}</h4>
                        {{ Lang::get('product.price_per_piece', ['price' => $product->price()]) }}
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
