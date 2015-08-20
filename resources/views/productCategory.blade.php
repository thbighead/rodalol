@extends('templates.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Produtos') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

        <!-- Filtro, listagem, paginação -->

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

<section id="produtos">
    <div class="container">

        <h3>Produtos</h3>
        <hr>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-2">
                <p>FILTRO</p><p>OU NÃO</p><p>FILTRO</p><p>OU NÃO</p>
                <p>FILTRO</p><p>OU NÃO</p><p>FILTRO</p><p>OU NÃO</p>
            </div>

            <div class="col-md-10">
                @foreach($product as $product)
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{asset('img/products_index/product2.png')}}" alt="Imagem 1">
                            <div class="caption text-center">
                                <a href="{{route('detalhesProduto',$product->id)}}">
                                    {{--<p>{{$product->nome}}</p>--}}
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                                </a>
                                <h3 class="text-center color-green">R${{$product->preco}}</h3>
                            </div><!--  caption -->
                        </div><!--  thumbnail -->
                    </div><!--  product -->
                @endforeach
            </div>

            {{--NÃO TÁ FUNCIONADO. WHY? WHY? NA PÁGINA DE LISTAGEM DE TODOS OS PRODUTOS FUNCIONA--}}
            {{--<div class="row text-center">--}}
                {{--{!! $product->render() !!}--}}
            {{--</div>--}}
        </div>{{--.row--}}


        {{--</div>--}}{{-- .row --}}
    </div>{{-- .container --}}
</section>{{-- #produtos --}}


@endsection