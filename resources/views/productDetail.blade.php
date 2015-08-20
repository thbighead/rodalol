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

                <div class="col-md-7">
                    {{--@foreach($products as $product)--}}
                            {{--<div class="thumbnail">--}}
                                {{--<img src="{{asset('img/products_index/product2.png')}}" alt="Imagem 1">--}}
                                {{--{{$product->id}}--}}
                            {{--</div><!--  thumbnail -->--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--@endforeach--}}
                </div>

                <div class="col-md-5">
                    <div class="row">
                        <h1>{{$product->nome}}</h1>
                        <hr>

                        <p>Vendido e negociado por
                            <a href="{{route('paginaInicial')}}" class="color-green">RodaLOL</a>
                        </p>
                    </div>

                    <h3 class="color-green">R${{$product->preco}}</h3>
                    <p>Categoria: {{$product->categoria}}</p>
<div class="row">
                    <h3>Descrição do Produto</h3>
                    <p class="tamDescricao">{{$product->especificacao}}</p>
</div>
                </div>

            </div>{{--.row--}}


            {{--</div>--}}{{-- .row --}}
        </div>{{-- .container --}}
    </section>{{-- #produtos --}}



@endsection