@extends('templates.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Produtos') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

    {{--BREADCRUMB--}}
    <section class="acertaBreadcrumb bg-light">
        <div class="container">
            <ol class="breadcrumb tiraBorda">
                <li><a href="{{route('paginaInicial')}}">Home</a></li>
                <li class="active">Produtos</li>
            </ol>
        </div>
    </section>
    {{--FIM BREADCRUMB--}}

    <section>
        <div class="container">

            <h3>Produtos</h3>
            <hr>

            <div class="clearfix"></div>

            <div class="row">

                {{--<div class="col-md-2">--}}
                    {{--<p>FILTRO</p><p>OU NÃO</p><p>FILTRO</p><p>OU NÃO</p>--}}
                    {{--<p>FILTRO</p><p>OU NÃO</p><p>FILTRO</p><p>OU NÃO</p>--}}
                {{--</div>--}}

                {{--{{ route('EditaProduto', ['id' => $product->id]) }}--}}

                <div class="col-md-5">
                    <img src="{{asset('img/product.jpeg')}}" class="img-responsive" alt="Imagem 1">
                </div>

                <div class="col-md-6 col-md-offset-1">
                    <div class="row">
                        <h1>{{$product->nome}}</h1>
                        <hr>

                        <p>Vendido e negociado por
                            <a href="{{route('paginaInicial')}}" class="color-green">RodaLOL</a>
                        </p>
                    </div>

                    <div class="row">
                        <p>Categoria:
                            <a href="{{route('CategoriaProduto', ['categoria'=>$product->categoria])}}" class="color-green">{{$product->categoria}}</a></p>
                        <h3 class="color-green">R${{$product->preco}}</h3>
                    </div>

                    <div class="row">
                        <h3>Descrição do Produto</h3>
                        <p>{{$product->especificacao}}</p>
                    </div>
                </div>

            </div>{{--.row--}}


            {{--</div>--}}{{-- .row --}}
        </div>{{-- .container --}}
    </section>{{-- #produtos --}}



@endsection