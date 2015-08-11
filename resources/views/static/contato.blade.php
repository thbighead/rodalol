@extends('templates.base')

@section('title', 'Contato')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('paginaInicial')}}">Home</a></li>
        <li class="active">Contato</li>
    </ol>
    <div class="container">
        <h3>Mande uma mensagem para a gente:</h3>

        <form action="{{action('ContatoController@store')}}" class="form-horizontal" method="post">
            {!! csrf_field() !!}
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
                        <option value=""></option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
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