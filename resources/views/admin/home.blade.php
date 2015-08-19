@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Administração') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

{{-- Content --}}

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            {{--<li class="active">--}}
                                {{--<a href="#"></a><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Dashboard<span class="caret"></span>--}}
                            {{--</li>--}}
                            <li>
                                <a href="#"></a><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Comentários<span class="caret"></span>
                            </li>
                            <li>
                                <a href="#"></a><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Gráficos<span class="caret"></span>
                            </li>
                            <li>
                                <a href="#"></a><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Produtos<span class="caret"></span>
                            </li>
                            <li>
                                <a href="#"></a><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Slideshow<span class="caret"></span>
                            </li>
                            <li>
                                <a href="#"></a><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Textos<span class="caret"></span>
                            </li>
                            <div class="clearfix"></div>
                            <li>
                                <a href="#"></a><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Usuários<span class="caret"></span>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
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