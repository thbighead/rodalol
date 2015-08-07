<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Bootstrap Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>RodaLOL - @yield('title')</title>
</head>
<body>
<header class="container">
    <div class="row">
        <figure>
            <img src="" alt="">
        </figure>
        <form action="" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
            <input type="submit", value="Entrar">
        </form>
    </div>
    <div class="row">
        <nav class="navbar navbar-inverse">
            <ul class="nav nav-inverse nav-justified disabled">
                <li>
                    <a href="<?php echo url('/'); ?>">In&iacute;cio</a>
                </li>
                <li>
                    <a href="<?php echo url('contato'); ?>">
                        <img src="" width="2%" height="2%" title="Contato"> Contato
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('quemsomos'); ?>">Quem somos?</a>
                </li>
                <li>
                    <a href="<?php echo url('admin'); ?>">&Aacute;rea administrativa</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<div class="vmenu">
    <nav>
        <ul>
            <li><a href="">Processadores</a></li>
            <li><a href="">Mem&oacute;rias RAM</a></li>
            <li><a href="">Monitores</a></li>
            <li><a href="">Placas de v&iacute;deo</a></li>
            <li><a href="">Armazenamento</a></li>
            <li><a href="">Perif&eacute;ricos</a></li>
        </ul>
    </nav>
</div>
<div class="container">
    @yield('content')
</div>
<footer>
    <div>
        P&aacute;gina feita pela <a href="">EJCM</a>.
    </div>
</footer>
</body>
</html>