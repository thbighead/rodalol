<header>
    <!--    login/registro + campo de busca/carrinho    -->
    <div class="row top-header">
        <div class="container">
            <div class="col-xs-5 col-sm-4 col-md-6 col-lg-6">
                Seja Bem Vindo. Faça
                <a href="#" data-toggle="modal" data-target="#loginModal"><span class="color-green">Login</span></a>
                ou
                <a href="#"><span class="color-green">cadastre-se</span></a>
            </div>
            <!--    Search Form     -->
            <div class="col-xs-4 col-sm-5 col-md-4 col-lg-4">
                <form class="navbar-form pull-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm bg-dark" placeholder="Buscar produtos">
                        <button class="btn btn-default btn-sm bg-dark" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </form>
            </div>
            <!--    Cart Shopping     -->
            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 mar-shop">
                <button class="btn btn-default btn-sm bg-dark" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                Carrinho <span class="color-green">( N )</span>
            </div>
        </div><!--  .container -->
    </div><!--  .row top header -->
    <!-- Modal for login -->
    <div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Entre com sua conta</h4>
                </div>
                <div class="modal-body" id="login">
                    <form method="post" action="#" class="form-horizontal" name="login_form">
                        {{--Email--}}
                        <div class="form-group">
                            <label for="login" class="col-md-2 control-label">E-mail</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="exemplo&#64;exemplo.com" name="login" id="login">
                            </div>
                        </div>
                        {{--Senha--}}
                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">Senha</label>
                            <div  class="col-md-8">
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                    </form>
                </div>
                {{--Botões de entrar e esqueci a senha--}}
                <div class="modal-footer">
                    <div class="row col-md-10 col-md-offset-1">
                        <button type="submit" class="btn btn-lg btn-primary btn-block" data-dismiss="modal">Entrar</button>
                    </div>
                    <a href="#forgotpassword" data-toggle="tab" class="text-center col-md-12 col-xs-12"> Esqueci a senha?</a>
                </div>
            </div>
                <div class="modal fade" id="forgotpassword">
                    <form method="post" action="" name="forgot_password">
                        Esqueceu sua senha? Nos mande seu email e nós resetaremos!
                        <input type="email" placeholder="exemplo&#64;exemplo.com" name="login" id="login">
                        <button type="submit" class="btn btn-lg btn-primary btn-block" data-dismiss="modal">Enviar</button>
                        <a href="#login" data-toggle="tab">Espere, consegui lembrar!</a>
                    </form>
                </div>

        </div>
    </div>
    <!--    menu principal  -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="{{route('paginaInicial')}}" class="navbar-brand">
                    <img class="img-logo" src="{{asset('img/logo.png')}}" alt="Logo RodaLOL">
                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">HARDWARE</a></li>
                    <li><a href="#">PERIFÉRICOS</a></li>
                    <li><a href="#">ELETRÔNICOS</a></li>
                    <li><a href="#">MONITORES</a></li>
                    <li><a href="#">ÁUDIO</a></li>
                    <li><a href="{{route('quemSomos')}}">QUEM SOMOS</a></li>
                    <li><a href="{{route('contato')}}">CONTATO</a></li>
                </ul>
            </div><!--    .navbar-collapse    -->
        </div><!--    .container    -->
    </nav><!--    .navbar .navbar-default    -->
</header>