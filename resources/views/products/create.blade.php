<h3>Novo Produto</h3>

<form action="/produtos" method="post">
    {!! csrf_field() !!}
    Nome: <input type="text" name="nome">
    Categoria: <input type="text" name="categoria">
    Especificação: <input type="text" name="especificacao">
    <input type="submit" value="Enviar">
</form>