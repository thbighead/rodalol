@extends('templates.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Produtos') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

<!-- Filtro, listagem, paginação -->


    <section id="produtos">
        <div class="container">

            {{--<div class="row">--}}

                <div class="col-md-3">
                    <h3>Produtos</h3>
                    <hr>
                </div>{{-- col-md-3 --}}

                <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-2">

                </div>

                <div class="col-md-10">
                    @foreach($products as $product)

                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="thumbnail">
                                <img src="{{asset('img/products_index/product2.png')}}" alt="Imagem 1">
                                <div class="caption">
                                    <a href="#">
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                                    </a>
                                    <h3 class="text-center color-green">R${{$product->preco}}</h3>
                                </div><!--  caption -->
                            </div><!--  thumbnail -->
                        </div><!--  product -->
                    @endforeach
                </div>

                <div class="row text-center">
                    {!! $products->render() !!}
                </div>

{{--<ul>--}}
    {{--<li>--}}
        {{--<a href="#" aria-label="Previous">--}}
            {{--<span>&laquo;</span>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<a href="{{$products->nextPageUrl()}}"></a>--}}
    {{--</li>--}}
{{--</ul>--}}

                {{--<div class="col-md-2">--}}
                    {{--<div class="collapse navbar-collapse" id="filter">--}}

                        {{--<div class="nav nav-pills nav-stacked">--}}
                            {{--<ul class="decoration">--}}
                                {{--<li class="dropdown">--}}
                                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Item 1</a>--}}
                                    {{--<ul class="dropdown-menu">--}}
                                        {{--<li><a href="#">Item 1</a></li>--}}
                                        {{--<li><a href="#">Item 2</a></li>--}}
                                        {{--<li><a href="#">Item 3</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Item 2</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Item 3</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Item 4</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Item 5</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}{{-- nav nav-pills nav-stacked --}}
                    {{--</div>--}}
                {{--</div>--}}{{-- col-md-9 --}}

                {{--<div class="col-md-10">--}}
                    {{--<div class="row">--}}
                        {{--@foreach($products as $product)--}}
                            {{--<div class="col-sm-3 col-lg-3 col-md-3">--}}
                                {{--<div class="thumbnail">--}}
                                    {{--<img src="{{asset('img/products_index/product2.png')}}" alt="Imagem 1">--}}
                                    {{--<div class="caption">--}}
                                        {{--<a href="#">--}}
                                            {{--<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>--}}
                                        {{--</a>--}}
                                        {{--<h3 class="text-center color-green">R$129,90</h3>--}}
                                    {{--</div><!--  caption -->--}}
                                {{--</div><!--  thumbnail   -->--}}
                            {{--</div><!--  products 2   -->--}}
                        {{--@endforeach--}}

                    {{--</div>--}}
                {{--</div>--}}

            </div>{{--.row--}}


            {{--</div>--}}{{-- .row --}}
        </div>{{-- .container --}}
    </section>{{-- #produtos --}}


@endsection