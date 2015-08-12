@extends('templates.base')

@section('js')
    <!-- CEP auto-complete -->
    <script src="{{asset('js/cep.js')}}" defer></script>
    <!-- Recaptcha Google -->
    <script src='https://www.google.com/recaptcha/api.js' defer></script>
@endsection

@section('title', 'Cadastro')

@section('content')
    <section class="acertaBreadcrumb bg-light">
        <div class="container">
            <ol class="breadcrumb tiraBorda">
                <li><a href="{{route('paginaInicial')}}">Home</a></li>
                <li class="active">Cadastro</li>
            </ol>
        </div>{{--  .container --}}
    </section>{{--  #breadcrumb --}}
    <div class="container">
        <h3>Cadastre-se:</h3>

        <form action="{{action('UsuarioController@store')}}" class="form-horizontal" method="post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="nome" class="col-md-2 control-label">Nome:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Creydson" name="nome" id="nome">
                </div>
            </div>{{--  Campo Nome  --}}

            <div class="form-group">
                <label for="cpf" class="col-md-2 control-label">CPF:</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="00000000000" name="cpf" id="cpf">
                </div>
            </div>{{-- Campo CPF --}}

            <div class="form-group">
                <label class="col-md-2 control-label">Sexo:</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="M">
                        <input type="radio" name="sexo" id="M" checked>Masculino
                    </label>
                    <label class="radio-inline" for="F">
                        <input type="radio" name="sexo" id="F">Feminino
                    </label>
                </div>
            </div>{{--  Campo Sexo  --}}

            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" placeholder="creydson&#64;rodalol.com" name="email" id="email">
                </div>
            </div>{{--  Campo Email  --}}

            {{-- Inicio da parte de endereço --}}

            <div class="form-group">
                <label for="cep" class="col-md-2 control-label">Cep:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="00000000" name="cep" id="cep" maxlength="8">
                </div>
            </div>{{-- Campo CEP --}}

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
            </div>{{--  Campo Estado  --}}

            <div class="form-group">
                <label for="cidade" class="col-md-2 control-label">Cidade:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Hell de Janeiro" name="cidade" id="cidade">
                </div>
            </div>{{-- Campo Cidade --}}

            <div class="form-group">
                <label for="bairro" class="col-md-2 control-label">Bairro:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Real Engenho" name="bairro" id="bairro">
                </div>
            </div>{{-- Campo Bairro --}}

            <div class="form-group">
                <label for="rua" class="col-md-2 control-label">Logradouro:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Rua dos Bobos" name="logradouro" id="logradouro">
                </div>
            </div>{{-- Campo Logradouro --}}

            <div class="form-group">
                <label for="numero" class="col-md-2 control-label">Número:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="0" name="numero" id="numero">
                </div>
            </div>{{-- Campo Numero --}}

            {{-- Fim da parte de endereço --}}

            <div class="form-group">
                <div class="col-md-10 col-md-offset-2 g-recaptcha" data-sitekey="6LcHIAsTAAAAAM6DFPZA2JsyM0Wm2h69VTkO-Jp3"></div>
            </div>{{--  Campo Recaptcha  --}}

            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <input type="submit" class="btn btn-default" value="Cadastrar">
                </div>
            </div>{{--  Campo Cadastrar  --}}
        </form>
    </div>
@endsection