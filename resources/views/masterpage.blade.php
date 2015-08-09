<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Bootstrap Optional theme -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">--}}
    <!-- My own css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>RodaLOL - @yield('title')</title>
</head>
<body>

    <header>
        <!--    login/registro + campo de busca/carrinho    -->
        <div class="row top-header">
            <div class="container">
                <div class="col-xs-5 col-sm-4 col-md-6 col-lg-6">
                    Seja Bem Vindo. Faça
                    <a href="#"><span class="color-green">Login</span></a>
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
        <!--    menu principal  -->
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a href="<?php echo url('/'); ?>" class="navbar-brand">
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
                        <li><a href="<?php echo url('contato'); ?>">CONTATO</a></li>
                    </ul>
                </div><!--    .navbar-collapse    -->
            </div><!--    .container    -->
        </nav><!--    .navbar .navbar-default    -->
    </header>

    {{--Conteudo da pagina aqui!--}}
    @yield('content')

    <section id="information" class="color-light" >
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h4 class="color-green">INFORMAÇÕES</h4>
                    <ul class="decoration text-left">
                        <li><a href="<?php echo url('quemsomos'); ?>" class="color-light">Quem Somos</a></li>
                        <li><a href="#" class="color-light">Termos e Condições</a></li>
                        <li><a href="#" class="color-light">Políticas de Privacidade</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h4 class="color-green">MINHA CONTA</h4>
                    <ul class="decoration text-left">
                        <li><a href="#" class="color-light">Meu Cadastro</a></li>
                        <li><a href="#" class="color-light">Meus Pedidos</a></li>
                        <li><a href="#" class="color-light">Meu Carrinho</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h4 class="color-green">CONTATO</h4>
                    <adress>
                        <strong>RodaLOL</strong><br>
                        Rua das Muambas, 171, Centro - Rio de Janeiro<br>
                        CEP: 25171-000<br><br>
                        <abbr title="Telefone">Tel: </abbr> +55 (21) 1711-7171
                        <br><br>
                        <strong>Email</strong><br>
                        <a href="#" class="color-green">contato@rodalol.com</a>
                    </adress>
                </div>
            </div><!--    .row    -->
        </div><!--  .container  -->
    </section><!--    #information    -->

    <footer id="copyright">
        <div class="container-fluid text-center color-light">
            <p>
                <a href="http://www.ejcm.com.br/" class="color-green">EJCM 2015</a> &copy; Todos os Direitos Reservados.
            </p>
        </div><!--  .container-fluid  -->
    </footer>

    <!--    JAVASCRIPTS  -->
    <!-- Latest compiled and minified JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{asset('js/javascript.js')}}"></script>
</body>
</html>