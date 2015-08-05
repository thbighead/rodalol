<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>RodaLOL - @yield('title')</title>
</head>
<body>
<header>
    <div class="logo-columns">
        <figure>
            <img src="" alt="">
        </figure>
        <form action="" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login">
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </form>
    </div>
    <br>
    <div class="hmenu">
        <nav>
            <ul>
                <li>
                    <a href="<?php echo url('/'); ?>">In&iacute;cio</a>
                </li>
                <li>
                    <a href="<?php echo url('contato'); ?>">
                        <img src="imgs/phone.png" width="2%" height="2%" title="Contato"> Contato
                    </a>
                </li>
                <li>
                    <a href="">Quem somos?</a>
                </li>
                <li>
                    <a href="admin">&Aacute;rea administrativa</a>
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