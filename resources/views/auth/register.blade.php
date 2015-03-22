@extends('layout.container')

@section('content')
    <h1>{{Lang::get('auth.register.header')}}</h1>
    <div class="well">
        {!! form($form) !!}
    </div>
@endsection