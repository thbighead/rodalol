<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<!-- Isso aparece para o usuario, ve se nao poe nada de util para ele fazer cocozinho aqui -->
<header>
    <nav>
        <p>Este &eacute; um menu simples:</p>
        <ul>
            <li>
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
<section>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deserunt dicta distinctio ducimus possimus quod.
    Assumenda inventore quo quod rerum saepe. Alias eaque facere maxime nemo rem. Commodi, earum, sapiente.
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
</body>
</html>