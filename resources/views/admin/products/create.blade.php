@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Admin | Cadastrar Produto') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

    {{-- Content --}}
    <div class="container">
        <h1 class="verticalMarginModal">Novo Produto</h1>

        {{--Btn para listagem de produtos--}}
        <a href="{{ route('ListProduto') }}" class="btn btn-lg btn-info verticalMarginModal">Lista de Produtos</a>

        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {{--{!! Form::open(['url'=>'admin/produtos/store']) !!}--}}
        {!! Form::open(array('action' => array('ProductController@store'))) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', null, ['class'=>'form-control border-green']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('categoria', 'Categoria:') !!}
                {!! Form::text('categoria', null, ['class'=>'form-control border-green']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('especificacao', 'Especificação:') !!}
                {!! Form::textarea('especificacao', null, ['class'=>'form-control border-green', 'rows' => '5']) !!}
                {{-- ['size' => '20x5']--}}
            </div>

            <div class="form-group">
                {!! Form::label('preco', 'Preço:') !!}
                {!! Form::text('preco', null, ['class'=>'form-control border-green']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('qtdEstoque', 'Quantidade em Estoque:') !!}
                {!! Form::text('qtdEstoque', null, ['class'=>'form-control border-green']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Cadastrar Produto', ['class'=>'btn btn-lg btn-info verticalMarginModal']) !!}
            </div>
        {!! Form::close() !!}

    </div>
@endsection