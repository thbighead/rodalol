@extends('templates.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Início') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}
    <section id="slideshow" class="container-fluid">
        <div id="menuSlide" class="carousel slide" data-interval="100">
            <!--    Wrapper for slides  -->
            <div class="carousel-inner">
                <div class="item active img-slide img-responsive"><img src="{{asset('img/slideshow1.png')}}" alt="Slideshow 1"></div>
                <div class="item img-slide img-responsive"><img src="{{asset('img/slideshow2.png')}}" alt="Slideshow 2"></div>
                <div class="item img-slide img-responsive"><img src="{{asset('img/slideshow3.png')}}" alt="Slideshow 3"></div>
            </div>
            <!--    Selectors for slides  -->
            <a class="left carousel-control" href="#menuSlide" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#menuSlide" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            <!--    Indicators for slides  -->
            <ol class="carousel-indicators">
                <li data-target="#menuSlide" data-slide-to="0" class="active"></li>
                <li data-target="#menuSlide" data-slide-to="1"></li>
                <li data-target="#menuSlide" data-slide-to="2"></li>
            </ol>
        </div>
    </section><!--    #slideshow    -->

    <section id="#destaque">
        <div class="container">
            <div class="row text-center color-dark">
                <h2>DESTAQUES</h2>
                <hr>
            </div>

            <div class="row">
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/products_index/product1.png')}}" alt="Imagem 1">
                        <div class="caption">
                            <a href="#">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                            </a>
                            <h3 class="text-center color-green">R$45,90</h3>
                        </div><!--  caption -->
                    </div><!--  thumbnail   -->
                </div><!--  product 1   -->

                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/products_index/product2.png')}}" alt="Imagem 1">
                        <div class="caption">
                            <a href="#">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                            </a>
                            <h3 class="text-center color-green">R$129,90</h3>
                        </div><!--  caption -->
                    </div><!--  thumbnail   -->
                </div><!--  product 2   -->

                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/products_index/product3.png')}}" alt="Imagem 1">
                        <div class="caption">
                            <a href="#">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                            </a>
                            <h3 class="text-center color-green">R$10,50</h3>
                        </div><!--  caption -->
                    </div><!--  thumbnail   -->
                </div><!--  product 3   -->

                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/products_index/product4.png')}}" alt="Imagem 1">
                        <div class="caption">
                            <a href="#">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                            </a>
                            <h3 class="text-center color-green">R$450,90</h3>
                        </div><!--  caption -->
                    </div><!--  thumbnail   -->
                </div><!--  product 4   -->
            </div><!--  row 1   -->

            <div class="row">
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/products_index/product5.png')}}" alt="Imagem 1">
                        <div class="caption">
                            <a href="#">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                            </a>
                            <h3 class="text-center color-green">R$27,80</h3>
                        </div><!--  caption -->
                    </div><!--  thumbnail   -->
                </div><!--  product 5   -->

                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/products_index/product6.png')}}" alt="Imagem 1">
                        <div class="caption">
                            <a href="#">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                            </a>
                            <h3 class="text-center color-green">R$129,90</h3>
                        </div><!--  caption -->
                    </div><!--  thumbnail   -->
                </div><!--  product 6   -->

                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/products_index/product7.png')}}" alt="Imagem 1">
                        <div class="caption">
                            <a href="#">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                            </a>
                            <h3 class="text-center color-green">R$22,90</h3>
                        </div><!--  caption -->
                    </div><!--  thumbnail   -->
                </div><!--  product 7   -->

                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('img/products_index/product8.png')}}" alt="Imagem 1">
                        <div class="caption">
                            <a href="#">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
                            </a>
                            <h3 class="text-center color-green">R$749,90</h3>
                        </div><!--  caption -->
                    </div><!--  thumbnail   -->
                </div><!--  product 8   -->
            </div><!--  .row 2 -->
        </div><!--    .container    -->
    </section><!--    #destaques    -->
@endsection {{--/conteudo da pagina--}}