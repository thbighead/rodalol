<p>
    You have received a new message from your website contact form.
</p>
<p>
    Here are the details:
</p>
<ul>
    <li>Nome: <strong>{{ $nome }}</strong></li>
    <li>E-mail: <strong>{{ $email }}</strong></li>
    <li>Sexo: <strong>{{ $sexo }}</strong></li>
    <li>Estado: <strong>{{ $estado }}</strong></li>
</ul>
<hr>
<p>
    @foreach ($messageLines as $messageLine)
        {{ $messageLine }}<br>
    @endforeach
</p>
<hr>