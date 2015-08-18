<h3>Novo Produto</h3>

@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

{!! Form::open(['url'=>'admin/produtos/store']) !!}

        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null) !!}
<br>
        {!! Form::label('categoria', 'Categoria:') !!}
        {!! Form::text('categoria', null) !!}
<br>
        {!! Form::label('especificacao', 'Especificação:') !!}
        {!! Form::text('especificacao', null) !!}
<br>
        {!! Form::label('preco', 'Preço:') !!}
        {!! Form::text('preco', null) !!}
<br>
        {!! Form::label('qtdEstoque', 'Qtd Estoque:') !!}
        {!! Form::text('qtdEstoque', null) !!}
<br>
        {!! Form::submit('Add Produto') !!}

{!! Form::close() !!}

{{--<form action="{!! action('ProductController@store') !!}" method="post">--}}
    {{--{!! csrf_field() !!}--}}
    {{--{!! method_field("post") !!}--}}
    {{--<label for="nome">Nome: </label>--}}
    {{--<input type="text" name="nome" id="name">--}}

    {{--<label for="categoria">Categoria: </label>--}}
    {{--<input type="text" name="categoria" id="category">--}}

    {{--<label for="especificacao">Especificação: </label>--}}
    {{--<input type="text" name="especificacao" id="description"></input>--}}

    {{--<label for="preco">Preço: </label>--}}
    {{--<input type="text" name="preco" id="price">--}}

    {{--<label for="qtdEstoque">Qtd Estoque: </label>--}}
    {{--<input type="text" name="qtdEstoque" id="qtd">--}}

    {{--<input type="submit" value="Enviar" id="CadastraProduto">--}}
{{--</form>--}}




{{--<!-- Latest compiled and minified JQuery -->--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
{{--<script src = "{{ asset('js/product.js') }}"></script>--}}