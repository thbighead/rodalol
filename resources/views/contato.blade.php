@extends('masterpage')

@section('title', 'Contato')

@section('content')
    <p>Legal, me envie seus dados que vou te responder.</p>

    <form action="http://google.com/search" method="get" target="_blank">
        <label for="login">Username:</label>
        <input type="text" name="login" id="login">

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
        <br>
        <label>Sexo:</label>
        <label for="M">Masculino</label>
        <input type="radio" name="sexo" id="M">
        <label for="F">Feminino</label>
        <input type="radio" name="sexo" id="F">
        <br>
        <label for="gay">Gay:</label>
        <input type="checkbox" name="gay" id="gay">
        <label for="tudojunto">TudoJunto:</label>
        <input type="checkbox" name="tudojunto" id="tudojunto">
        <br>
        <label for="descricao">Descri&ccedil;&atilde;o:</label><br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        <br>
        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="" selected></option>
            <option value="RJ">RJ</option>
            <option value="RS">RS</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
            <option value="AM">AM</option>
        </select>
        <br>
        <input type="submit" value="Search">
    </form>
@endsection