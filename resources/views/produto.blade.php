@extends('templates.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Produtos Teste') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

<!-- Filtro, listagem, paginação -->


    <section id="produtos">
        <div class="container">

            <div class="row">

            <div class="col-md-3">
                <h3>Teste</h3>
                <hr>
            </div>{{-- col-md-3 --}}

            <div class="clearfix"></div>

            <div class="col-md-9">
                <div class="collapse navbar-collapse" id="filter">
                    
                    <div class="nav nav-pills nav-stacked">
                        <ul class="decoration">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item 1</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Item 2</a>
                            </li>
                            <li>
                                <a href="#">Item 3</a>
                            </li>
                            <li>
                                <a href="#">Item 4</a>
                            </li>
                            <li>
                                <a href="#">Item 5</a>
                            </li>
                        </ul>
                    </div>{{-- nav nav-pills nav-stacked --}}
                </div>
            </div>{{-- col-md-9 --}}
            </div>{{-- .row --}}
        </div>{{-- .container --}}
    </section>{{-- #produtos --}}


@endsection