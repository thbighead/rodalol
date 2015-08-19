@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Administração') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

{{-- Content --}}

<div class="container">
    <div class="row">

        <div class="col-md-3 col-sm-3">
            <h3>Opções</h3>
            <hr>
            {{--MENU--}}
            <nav class="navbar navbar-default sidebar" role="navigation">
                {{--<div class="container">--}}
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Menu
                    {{--<img class="img-logo" src="{{asset('img/logo.png')}}" alt="Logo RodaLOL">--}}
                    </a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-sidebar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!-- .navbar-header -->

                <div class="collapse navbar-collapse text-left" id="navbar-collapse-sidebar">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">Dashboard</a></li>
                        {{-- Comments Dropdown --}}
                        <li class="dropdown"><a href="#"><i class="glyphicon glyphicon-comment"></i>&nbsp;&nbsp;Comentários</a></li>
                        {{-- Graphics Dropdown --}}
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-stats"></i>
                                    &nbsp;&nbsp;Gráficos&nbsp;&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu 1-1</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu 1-2</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu 1-3</a></li>
                            </ul>
                        </li>
                        {{-- Products Dropdown --}}
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-shopping-cart"></i>
                                &nbsp;&nbsp;Produtos&nbsp;&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('AddProduto') }}" class="dropdown-toggle" data-toggle="dropdown">Adicionar Produtos</a></li>
                                <li><a href="{{ route('EditaProduto') }}" class="dropdown-toggle" data-toggle="dropdown">Alterar Produtos</a></li>
                                <li><a href="{{ route('ExcluirProduto') }}" class="dropdown-toggle" data-toggle="dropdown">Excluir Produtos</a></li>
                            </ul>
                        </li>
                        {{-- Slideshow Dropdown --}}
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-picture"></i>
                            &nbsp;&nbsp;Slideshow&nbsp;&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar Imagens</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Listar Imagens</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Alterar Imagens</a></li>
                            </ul>
                        </li>
                        {{-- Texts Dropdown --}}
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-pencil"></i>
                                &nbsp;&nbsp;Textos&nbsp;&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Página Inicial</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sobre a Empresa</a></li>
                            </ul>
                        </li>
                        {{-- Users Dropdown --}}
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>
                                &nbsp;&nbsp;Usuários&nbsp;&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Listar Usuários</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Excluir Usuários</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .collapse navbar-collapse -->
                {{--</div><!-- .container -->--}}
            </nav>
            <hr>
            {{--FIM MENU--}}
        </div>

        <div class="col-md-9 col-sm-9">
            <h3 class="pdHeading">Dashboard</h3>
            <hr>

            <div class="col-md-4 col-sm-4">
                <h4 class="text-center admin-box">Usuários&nbsp;&nbsp;<span class="badge">347</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-primary btn-block" type="button">
                    <a href="#">Ver Detalhes</a>
                </button>
            </div>

            <div class="col-md-4 col-sm-4">
                <h4 class="text-center admin-box">Vendas&nbsp;&nbsp;<span class="badge">1034</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-primary btn-block" type="button">
                    <a href="#">Ver Detalhes</a>
                </button>
            </div>

            <div class="col-md-4 col-sm-4">
                <h4 class="text-center admin-box">Pedidos&nbsp;&nbsp;<span class="badge">894</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-primary btn-block" type="button">
                    <a href="#">Ver Detalhes</a>
                </button>
            </div>
            <div class="clearfix"></div>
            <hr>
        </div>
    </div><!-- fim .row -->

    <div class="col-md-3">

        {{--<nav class="navbar navbar-default sidebar" role="navigation">--}}
            {{--<div class="container">--}}
                {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
                {{--<div class="navbar-header">--}}
                    {{--<a href="#" class="navbar-brand">RODALOL--}}
                        {{--<img class="img-logo" src="{{asset('img/logo.png')}}" alt="Logo RodaLOL">--}}
                    {{--</a>--}}
                    {{--<button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-sidebar">--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}
                {{--</div><!-- .navbar-header -->--}}

                {{--<div class="collapse navbar-collapse" id="navbar-collapse-sidebar">--}}
                    {{--<ul class="nav nav-pills nav-stacked">--}}
                        {{--<li class="active"><a href="#">Dashboard</a></li>--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1 <span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu 1-1</a></li>--}}
                                {{--<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu 1-2</a></li>--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu 1-3</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="#">Menu 2</a></li>--}}
                        {{--<li><a href="#">Menu 3</a></li>--}}
                    {{--</ul>--}}
                {{--</div><!-- .collapse navbar-collapse -->--}}
            {{--</div><!-- .container -->--}}
        {{--</nav>--}}
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
            <h4><i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;&nbsp;Últimas Vendas</h4>
            <hr>
        </div>





        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr><th>ID Pedido</th><th>Quantidade</th><th>ID Produto</th><th>ID Usuário</th></tr>
                </thead>

                <tbody>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                <tr>
                    <td>#1</td><td>4</td><td>#31</td><td>#169</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection {{--/conteudo da pagina--}}