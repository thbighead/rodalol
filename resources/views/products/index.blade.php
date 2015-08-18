@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Admin | Alterar Produto') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

    {{-- Content --}}
    <div class="container">
        <h1 class="verticalMarginModal">Produtos Cadastrados</h1>
        {{--Btn para adicionar novo produto--}}
        <a href="{{ route('AddProduto') }}" class="btn btn-lg btn-primary verticalMarginModal">Novo Produto</a>

        <table class="table table-striped table-bordered table-hover sortable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->nome}}</td>
                        <td>{{$product->categoria}}</td>
                        <td>{{$product->especificacao}}</td>
                        <td>R${{$product->preco}}</td>
                        <td>{{$product->qtdEstoque}}</td>
                        <td>
                            <a href="{{ route('EditaProduto', ['id' => $product->id]) }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <a href="{{ route('ExcluirProduto', ['id' => $product->id]) }}" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection

<script src="{{asset('js/sorttable.js')}}"></script>