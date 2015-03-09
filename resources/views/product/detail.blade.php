@extends('layout.container')

@section('content')
    <div class="well">
    <img src="{{$product->photo}}" class="product-photo img-thumbnail"/>

    <h3>{{$product->code}} - {{$product->name}}</h3>


    <div class="well">
        <p>{{$product->description}}</p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <table class="table">
                <thead>
                <tr>
                    <th>Color</th>
                    <th>Stock</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product->colors as $color)
                    <tr>
                        <td>{{$color->name}}</td>
                        <td>{{$color->stock}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <section id="order-product">
        {!! form($form) !!}
    </section>
    </div>
@endsection