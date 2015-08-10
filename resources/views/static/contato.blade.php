@extends('templates.masterpage')

@section('title', 'Contato')

@section('content')
    <ol class="breadcrumb">
        <li><a href="<?php echo url('/'); ?>">Home</a></li>
        <li class="active">Contato</li>
    </ol>
    <div class="container">
        <h3>Mande uma mensagem para a gente:</h3>

        <form action="#" class="form-horizontal" method="post">
            <div class="form-group">
                <label for="nome" class="col-md-2 control-label">Nome:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Creydson" name="nome" id="nome">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" placeholder="creydson&#64;rodalol.com" name="email" id="email">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Sexo:</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="M">
                        <input type="radio" name="sexo" id="M">Masculino
                    </label>
                    <label class="radio-inline" for="F">
                        <input type="radio" name="sexo" id="F">Feminino
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="estado" class="col-md-2 control-label">Estado:</label>
                <div class="col-md-1">
                    <select class="estados form-control" name="estado" id="estado">
                        <option value="" selected></option>
                        <option value="RJ">RJ</option>
                        <option value="RS">RS</option>
                        <option value="SP">SP</option>
                        <option value="TO">TO</option>
                        <option value="AM">AM</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="msg" class="col-md-2 control-label">Mensagem:</label>
                <div class="col-md-8">
                    <textarea class="form-control" placeholder="Escreva sua mensagem aqui." name="msg" id="msg" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-10">
                <input type="submit" class="pull-right btn btn-default" value="Enviar">
            </div>
        </form>
    </div>
@endsection