@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Admin | Alterar Produto') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

{{-- Content --}}
<div class="container">
{{--    <h1 class="verticalMarginModal">Alterar Imagem com ID: {{$product->id}}</h1>--}}

    {{--Btn para listagem de produtos--}}
    <a href="{{ route('ListSlideshow') }}" class="btn btn-lg btn-primary verticalMarginModal">Lista de Imagens</a>

    @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{--{!! Form::open(array('method'=>'put', 'action' => array('SlideshowController@update', $product->id))) !!}--}}
    <div class="form-group">
        {!! Form::label('imagem', 'Imagem:') !!}
{{--        {!! Form::text('imagem', $product->nome, ['class'=>'form-control border-green']) !!}--}}
    </div>

    <div class="form-group">
        {!! Form::submit('Alterar Imagem', ['class'=>'btn btn-lg btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {{--{{dd($product)}};--}}

</div>

@endsection