<h3>Editar Produto: {{$product->nome}}</h3>

@if ($errors->any())
    <ul class="alert alert-warning">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

{{--{!! Form::open(['url'=>'admin/produtos/update/'.$product->id, 'method'=>'put']) !!}--}}
{!! Form::open(array('method'=>'put', 'action' => array('ProductController@update', $product->id))) !!}

    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', $product->nome) !!}
<br>
    {!! Form::label('categoria', 'Categoria:') !!}
    {!! Form::text('categoria', $product->categoria) !!}
<br>
    {!! Form::label('especificacao', 'Especificação:') !!}
    {!! Form::text('especificacao', $product->especificacao) !!}
<br>
    {!! Form::label('preco', 'Preço:') !!}
    {!! Form::text('preco', $product->preco) !!}
<br>
    {!! Form::label('qtdEstoque', 'Qtd Estoque:') !!}
    {!! Form::text('qtdEstoque', $product->qtdEstoque) !!}
<br>
    {!! Form::submit('Editar Produto') !!}

    {!! Form::close() !!}

{{dd($product)}};