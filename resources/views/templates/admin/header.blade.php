<header>
    <nav class="navbar navbar-inverse top-header verticalMargin">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">RODALOL
                    {{--<img class="img-logo" src="{{asset('img/logo.png')}}" alt="Logo RodaLOL">--}}
                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-admin">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-admin">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Meu Perfil</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            <!--    .navbar-collapse    -->
            </div>
        <!--    .container    -->
        </div>
    </nav>
</header>


{{-- Content --}}

<div class="container">
    <div class="row">

        <div class="col-md-3 col-sm-3">
            <h3>Título 1</h3>
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
            <h4><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;&nbsp;Últimas Vendas</a></h4>
            <hr>
        </div>

    </div>


</div>




















