@extends('templates.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('js')
    <!-- Carousel Script (Slideshow) -->
    <script src="{{asset('js/home.js')}}"></script>
@endsection

@section('title', 'Início') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}
{{--SLIDESHOW--}}
<section id="slideshow" class="container-fluid">
    <div id="menuSlide" class="carousel slide" data-interval="100">
        <!--    Wrapper for slides  -->
        <div class="carousel-inner">
            <div class="item active img-slide img-responsive    "><img src="{{asset('img/slideshow1.png')}}" alt="Slideshow 1"></div>
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

{{--DESTAQUES--}}
<section id="#destaque">
    <div class="container">
        <div class="row">
            {{--    hr ao lado do nome  --}}
            <div class="col-sm-1 col-sm-offset-3 col-md-1 col-md-offset-3 col-lg-1 col-lg-offset-3">
                <hr class="hrSide">
            </div>
            {{--    Nome da seção   --}}
            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                <h2>DESTAQUES</h2>
            </div>
            {{--    hr ao lado do nome  --}}
            <div class="col-sm-3 col-sm-pull-1 col-md-3 col-md-pull-1 col-lg-3 col-lg-pull-1">
                <hr class="hrSide">
            </div>
        </div>

        <div class="verticalMargin"></div>
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
            </div><!--  products 1   -->

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
            </div><!--  products 2   -->

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
            </div><!--  products 3   -->

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
            </div><!--  products 4   -->
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
            </div><!--  products 5   -->

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
            </div><!--  products 6   -->

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
            </div><!--  products 7   -->

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
            </div><!--  products 8   -->
        </div><!--  .row 2 -->

        <div class="row text-center verticalMarginModal">
            <h3>
                <a href="{{route('produtos')}}" class="color-green">Ver todos os Produtos</a>
            </h3>
        </div>

    </div><!--    .container    -->

    <section>
        <div class="container">
            <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho.
                Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.
            <p>Ai você fala o seguinte: "- Mas vocês acabaram isso?" Vou te falar: -"Não, está em andamento!" Tem obras que "vai" durar pra depois
                de 2010. Agora, por isso, nós já não desenhamos, não começamos a fazer projeto do que nós "podêmo fazê"? 11, 12, 13, 14...
                Por que é que não?</p>
            <p>A população ela precisa da Zona Franca de Manaus, porque na Zona franca de Manaus, não é uma zona de exportação,
                é uma zona para o Brasil. Portanto ela tem um objetivo, ela evita o desmatamento, que é altamente lucravito.
                Derrubar arvores da natureza é muito lucrativo!</p>
            <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam.
                Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.</p>
            <p>Eu dou dinheiro pra minha filha. Eu dou dinheiro pra ela viajar, então é... é... Já vivi muito sem dinheiro, já vivi muito com dinheiro.
                -Jornalista: Coloca esse dinheiro na poupança que a senhora ganha R$10 mil por mês. -Dilma: O que que é R$10 mil?</p>
        </div>
    </section>
</section><!--    #destaques    -->
@endsection {{--/conteudo da pagina--}}