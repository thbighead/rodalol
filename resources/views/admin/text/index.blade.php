@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Admin | Textos') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

<div class="container">
    <div class="container text-center">
        <h1 class="verticalMarginModal">Textos</h1>
        {{--Btn para adicionar novo produto--}}
        <a href="{{ route('AddText') }}" class="btn btn-lg btn-info verticalMarginModal">Texto - Página Inicial</a>
        <a href="{{ route('AddText') }}" class="btn btn-lg btn-info verticalMarginModal">Texto - Página Quem Somos</a>
    </div>

    <div class="col-md-12">
        <div class="row">
            <table class="table table-striped table-bordered table-hover sortable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Página</th>
                    <th>Conteúdo</th>
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
                    {{--<a href="{{ route('EditaText', ['id' => $product->id]) }}" class="btn btn-success">Editar</a>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<a href="{{ route('ExcluirText', ['id' => $product->id]) }}" class="btn btn-danger">Excluir</a>--}}
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