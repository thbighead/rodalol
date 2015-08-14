@extends('templates.admin.base') {{--Faz carregar a masterpage (agora separada em header, base e footer)--}}

@section('title', 'Administração') {{--Define o titulo da pagina (posicionado na masterpage)--}}

@section('content') {{--conteudo da pagina--}}

{{-- Content --}}

<div class="container">
    <div class="row">

        <div class="col-md-3 col-sm-3">
            <h3>Opções</h3>
            <hr>

            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#"><i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Dashboard</a></li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-stats"></i>&nbsp;&nbsp;Gráficos</a></li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Galeria</a></li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-comment"></i>&nbsp;&nbsp;Comentários</a></li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Usuários</a></li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;&nbsp;Produtos</a></li>
            </ul>
        </div>

        <div class="col-md-9 col-sm-9">
            <h3 class="pdHeading">Dashboard</h3>
            <hr>

            <div class="col-md-4 col-sm-4">
                <h4 class="text-center admin-box">Usuários&nbsp;&nbsp;<span class="badge">347</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-success btn-block" type="button">
                    <a href="#">Ver Detalhes</a>
                </button>
            </div>

            <div class="col-md-4 col-sm-4">
                <h4 class="text-center admin-box">Vendas&nbsp;&nbsp;<span class="badge">1034</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-success btn-block" type="button">
                    <a href="#">Ver Detalhes</a>
                </button>
            </div>

            <div class="col-md-4 col-sm-4">
                <h4 class="text-center admin-box">Pedidos&nbsp;&nbsp;<span class="badge">894</span>&nbsp;&nbsp;</h4>
                <button class="btn btn-success btn-block" type="button">
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