@extends('templates.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Produtos') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

        <!-- Filtro, listagem, paginação -->

{{--BREADCRUMB--}}
<section class="acertaBreadcrumb bg-light">
    <div class="container">
        <ol class="breadcrumb tiraBorda">
            <li><a href="{{route('paginaInicial')}}">Home</a></li>
            <li><a href="#">Produtos</a></li>
            <li class="active">{{$category}}</li>
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
                @foreach($product as $products)
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{asset('img/products_index/product6.png')}}" alt="Imagem 1">
                            <div class="caption text-center">
                                <a href="{{route('detalhesProduto',$products->id)}}">
                                    {{--<p>{{$product->nome}}</p>--}}
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                                </a>
                                <h3 class="text-center color-green">R${{$products->preco}}</h3>
                            </div><!--  caption -->
                        </div><!--  thumbnail -->
                    </div><!--  product -->
                @endforeach
            </div>

            {{--NÃO TÁ FUNCIONADO. WHY? WHY? NA PÁGINA DE LISTAGEM DE TODOS OS PRODUTOS FUNCIONA--}}


        </div>{{--.row--}}

        <div class="text-center">
            {!! $product->render() !!}
        </div>
        {{--</div>--}}{{-- .row --}}
    </div>{{-- .container --}}
</section>{{-- #produtos --}}


@endsection