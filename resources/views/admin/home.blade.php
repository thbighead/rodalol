@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Administração') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

{{-- Content --}}

<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-3 verticalMargin">
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
                    <div class="navbar-collapse collapse sidebar-navbar-collapse" id="sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <div class="clearfix"></div>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-comment"></i>
                                    &nbsp;&nbsp;Comentários
                                    {{--<span class="caret"></span>--}}
                                </a>
                            </li>
                            <div class="clearfix"></div>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                    &nbsp;&nbsp;Produtos<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('ListProduto')}}">Listar Produtos</a></li>
                                    <li><a href="{{route('AddProduto')}}">Adicionar Produtos</a></li>
                                    <li><a href="{{route('ListProduto')}}">Editar Produtos</a></li>
                                    <li><a href="{{route('ListProduto')}}">Excluir Produtos</a></li>
                                </ul>
                            </li>
                            <div class="clearfix"></div>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="glyphicon glyphicon-picture"></i>
                                    &nbsp;&nbsp;Slideshow<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Adicionar Imagem</a></li>
                                    <li><a href="#">Alterar Imagem</a></li>
                                    <li><a href="#">Excluir Imagem</a></li>
                                </ul>
                            </li>
                            <div class="clearfix"></div>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                    &nbsp;&nbsp;Textos<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Editar texto da Página Inicial</a></li>
                                    <li><a href="#">Editar texto da Página de Contato</a></li>
                                    <li><a href="#">Editar texto da Página Quem Somos</a></li>
                                </ul>
                            </li>
                            <div class="clearfix"></div>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="glyphicon glyphicon-user"></i>
                                    &nbsp;&nbsp;Usuários<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Alterar Cadastro</a></li>
                                    <li><a href="#">Excluir Cadastro</a></li>
                                    <li><a href="#">Listar Usuários</a></li>
                                    <li><a href="#">Excluir Usuários</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>



        <div class="col-md-9 col-sm-9">
            <h3 class="pdHeading">Dashboard</h3>
            <hr>

            <div class="col-md-4 col-sm-4 verticalMarginModal">
                <h4 class="text-center admin-box">Usuários&nbsp;&nbsp;<span class="badge">347</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-primary btn-block" type="button">
                    <a href="#">Ver Detalhes</a>
                </button>
            </div>

            <div class="col-md-4 col-sm-4 verticalMarginModal"">
                <h4 class="text-center admin-box">Vendas&nbsp;&nbsp;<span class="badge">1034</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-primary btn-block" type="button">
                    <a href="#">Ver Detalhes</a>
                </button>
            </div>

            <div class="col-md-4 col-sm-4 verticalMarginModal"">
                <h4 class="text-center admin-box">Pedidos&nbsp;&nbsp;<span class="badge">894</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-primary btn-block" type="button">
                    <a href="#">Ver Detalhes</a>
                </button>
            </div>
            <div class="clearfix"></div>
            <hr>
        </div>
    </div><!-- fim .row -->


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