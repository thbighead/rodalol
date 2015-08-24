@extends('templates.base')

@section('title', 'Busca')

@section('content')
    @foreach($products as $product)
        {{--{{var_dump($products)}}--}}
        <a href="#">{{$product}}</a>
    @endforeach
@endsection