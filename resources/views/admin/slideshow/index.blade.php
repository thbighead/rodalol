@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Admin | Slideshow') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

<div class="container">
    <div class="container text-center">
        <h1 class="verticalMarginModal">Slideshow</h1>
        {{--Btn para adicionar novo produto--}}
        <a href="{{ route('AddProduto') }}" class="btn btn-lg btn-info verticalMarginModal">Nova Imagem</a>
    </div>

    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover sortable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Posição</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                </thead>

                <tbody>
{{--                @foreach($products as $product)--}}
                    <tr>
                        {{--<td>{{$product->id}}</td>--}}
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        {{--<td>--}}
                            {{--<a href="{{ route('EditaProduto', ['id' => $product->id]) }}" class="btn btn-success">Editar</a>--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<a href="{{ route('ExcluirProduto', ['id' => $product->id]) }}" class="btn btn-danger">Excluir</a>--}}
                        {{--</td>--}}
                    </tr>
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>

    {{--<div class="row text-center">--}}
        {{--{!! $products->render() !!}--}}
    {{--</div>--}}

</div>

@endsection