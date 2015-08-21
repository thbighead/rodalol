@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Admin | Alterar Produto') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

    {{-- Content --}}
    <div class="container">
        <h1 class="verticalMarginModal">Editar Produto com ID: {{$product->id}}</h1>

        {{--Btn para listagem de produtos--}}
        <a href="{{ route('ListProduto') }}" class="btn btn-lg btn-primary verticalMarginModal">Lista de Produtos</a>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        {{--{!! Form::open(['url'=>'admin/produtos/update/'.$product->id, 'method'=>'put']) !!}--}}
        {!! Form::open(array('method'=>'put', 'action' => array('ProductController@update', $product->id))) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', $product->nome, ['class'=>'form-control border-green']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('categoria', 'Categoria:') !!}
                {!! Form::text('categoria', $product->categoria, ['class'=>'form-control border-green']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('especificacao', 'Especificação:') !!}
                {!! Form::textarea('especificacao', null, ['class'=>'form-control border-green', 'rows' => '5']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('preco', 'Preço:') !!}
                {!! Form::text('preco', $product->preco, ['class'=>'form-control border-green']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('qtdEstoque', 'Quantidade em Estoque:') !!}
                {!! Form::text('qtdEstoque', $product->qtdEstoque, ['class'=>'form-control border-green']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar Produto', ['class'=>'btn btn-lg btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        {{--{{dd($product)}};--}}

    </div>

@endsection