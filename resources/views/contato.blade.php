@extends('masterpage')

@section('title', 'Contato')

@section('content')
    <ol class="breadcrumb">
        <li><a href="<?php echo url('/'); ?>">Home</a></li>
        <li class="active">Contato</li>
    </ol>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium delectus distinctio eos optio quasi. Amet dolorem eum facere, hic ipsam, libero numquam perspiciatis praesentium quo rerum suscipit, ullam vero voluptatibus.</p>

        <form action="#" class="form-horizontal" method="post">
            <div class="form-group">
                <label for="nome" class="col-md-2 control-label">Nome:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Sexo:</label>
                <div class="col-md-8">
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
                    <select class="form-control" name="estado" id="estado">
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
                <div class="col-md-10">
                    <textarea class="form-control" name="msg" id="msg" rows="10"></textarea>
                </div>
            </div>
            <input type="submit" class="pull-right btn btn-default" value="Enviar">
        </form>
    </div>
@endsection