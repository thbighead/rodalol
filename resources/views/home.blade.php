<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
        <link type="text/css" rel="stylesheet" href="{{asset('libs/CSS/reset.css')}}">
{{--    <link type="text/css" rel="stylesheet" href="{{asset('CSS/normalize.css')}}">--}}
    <link type="text/css" rel="stylesheet" href="{{asset('libs/CSS/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Isso aparece para o usuario, ve se nao poe nada de util para ele fazer cocozinho aqui -->
<header>
    <nav class="patati patata">
        <p>Este &eacute; um menu simples:</p>
        <ul>
            <li id="home">
                <a href="<?php echo url('/'); ?>">HOME</a>
            </li>
            <li>
                <a href="admin">&Aacute;rea administrativa</a>
            </li>
            <li>
                <a href="<?php echo url('contato'); ?>">
                    <img src="imgs/phone.png" width="2%" height="2%" title="Contato"> Contato
                </a>
            </li>
        </ul>
        <ol>
            <li>HOME</li>
            <li>&Aacute;rea administrativa</li>
            <li>Contato</li>
        </ol>
    </nav>
</header>
<pre>
    <?php
        $user = new \App\User();
        var_dump($user);
    ?>
</pre>
<section class="redbg" id="bluebg">
    <p class="txtidnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deserunt dicta distinctio ducimus possimus quod.
    Assumenda inventore quo quod rerum saepe. Alias eaque facere maxime nemo rem. Commodi, earum, sapiente.</p>
    <article>
        <header>Cabe&ccedil;a do post.</header>
        <div>Qualquer merda.</div>
        <span>Este &eacute; o meu primeiro post.</span>
        <footer>P&eacute; do post.</footer>
    </article>
</section>
<table>
    <tr>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Pre&ccedil;o (R&#36;)</th>
    </tr>
    <tr>
        <td>P&ecirc;ra</td>
        <td>3</td>
        <td>3,50</td>
    </tr>
    <tr>
        <td>Ma&ccedil;&atilde;</td>
        <td>5</td>
        <td>3,00</td>
    </tr>
    <tr>
        <td>Banana</td>
        <td>6</td>
        <td>1,50</td>
    </tr>
</table>
<div id="borda">
    <div id="caixa">
        content1
    </div>
    <div id="caixa">
        content2
    </div>
    <div id="caixa">
        content3
    </div>
</div>
<div class="caixaestatica">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad animi commodi consequuntur error, est eveniet hic id iste, laboriosam minima minus nesciunt porro provident ratione reprehenderit similique soluta unde.
</div>
<div class="caixarelativa">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur cum dignissimos dolorem hic inventore magni, molestiae necessitatibus neque non nulla numquam, obcaecati optio praesentium quasi, qui quo temporibus ut!
</div>
<div class="caixaabsoluta">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cupiditate deleniti dignissimos distinctio enim eveniet maiores maxime molestias nesciunt omnis optio pariatur porro possimus recusandae sequi, soluta tempore vel voluptatum.
</div>
<div class="caixafixa">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad debitis deserunt, magni odio optio! At commodi debitis dolore ea, eum inventore ipsam iure natus qui sed sint temporibus, voluptas?
</div>
</body>
</html>