@extends('templates.base')

@section('js')
    <!-- cadastrarUsuario.js -->
    <script src="{{asset('js/cadastrarUsuario.js')}}" defer></script>
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

        <form class="form-horizontal" id="form">
            {!! csrf_field() !!}
            {!! method_field("put") !!}

            {{--  Campo Nome  --}}
            <div class="form-group">
                <label for="nome" class="col-md-2 control-label">Nome:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control border-green" placeholder="Creydson" name="nome" id="nome">
                </div>
            </div>

            {{--  Campo Email  --}}
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control border-green" placeholder="creydson&#64;rodalol.com" name="email" id="email">
                </div>
            </div>

            {{--  Campo Senha  --}}
            <div class="form-group">
                <label for="password" class="col-md-2 control-label">Senha:</label>
                <div class="col-md-3">
                    <input type="password" class="form-control border-green" placeholder="Máximo de 20 caracteres" name="password" id="password" maxlength="20">
                </div>
                {{--  Campo Confirmar Senha  --}}
                <label for="confirm" class="col-md-2 control-label">Confirme a senha:</label>
                <div class="col-md-3">
                    <input type="password" class="form-control border-green" placeholder="Máximo de 20 caracteres" name="confirm" id="confirm" maxlength="20">
                </div>
            </div>

            {{-- Campo CPF --}}
            <div class="form-group">
                <label for="cpf" class="col-md-2 control-label">CPF:</label>
                <div class="col-md-2">
                    <input type="text" class="form-control border-green" placeholder="00000000000" name="cpf" id="cpf">
                </div>
            </div>

            {{--  Campo Sexo  --}}
            <div class="form-group">
                <label class="col-md-2 control-label">Sexo:</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="M">
                        <input type="radio" name="sexo" id="M" value="M" checked>Masculino
                    </label>
                    <label class="radio-inline" for="F">
                        <input type="radio" name="sexo" id="F" value="F">Feminino
                    </label>
                </div>
            </div>

            {{-- Inicio da parte de endereço --}}

            {{-- Campo CEP --}}
            <div class="form-group">
                <label for="cep" class="col-md-2 control-label">Cep:</label>
                <div class="col-md-2">
                    <input type="text" class="form-control border-green" placeholder="00000000" name="cep" id="cep" maxlength="8">
                </div>
            </div>

            {{-- Campo Logradouro --}}
            <div class="form-group">
                <label for="logradouro" class="col-md-2 control-label">Logradouro:</label>
                <div class="col-md-5">
                    <input type="text" class="form-control border-green" placeholder="Rua das Muambas" name="logradouro" id="logradouro">
                </div>
            </div>

            {{-- Campo Numero --}}
                <div class="form-group">
                    <label for="numero" class="col-md-2 control-label">Número:</label>
                    <div class="col-md-1">
                        <input type="text" class="form-control border-green" placeholder="171" name="numero" id="numero">
                    </div>
                </div>

            {{-- Campo Complemento --}}
                <div class="form-group">
                    <label for="complemento" class="col-md-2 control-label">Complemento:</label>
                    <div class="col-md-1">
                        <input type="text" class="form-control border-green" placeholder="Casa 2" name="complemento" id="complemento">
                    </div>
                </div>

            {{-- Campo Bairro --}}
                <div class="form-group">
                    <label for="bairro" class="col-md-2 control-label">Bairro:</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control border-green" placeholder="Real Engenho" name="bairro" id="bairro">
                    </div>
                </div>

            {{--  Campo Estado  --}}
            <div class="form-group">
                <label for="estado" class="col-md-2 control-label">Estado:</label>
                <div class="col-md-1">
                    <select class="estados form-control border-green" name="estado" id="estado">
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
                        <option value="RJ" selected>RJ</option>
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

            {{-- Campo Cidade --}}
            <div class="form-group">
                <label for="cidade" class="col-md-2 control-label">Cidade:</label>
                <div class="col-md-2">
                    <input type="text" class="form-control  border-green" placeholder="Hell de Janeiro" name="cidade" id="cidade">
                </div>
            </div>
            {{-- Fim da parte de endereço --}}

            {{--  Campo Recaptcha  --}}
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2 g-recaptcha" data-sitekey="6LcHIAsTAAAAAM6DFPZA2JsyM0Wm2h69VTkO-Jp3"></div>
            </div>

            {{--  Campo Submeter Cadastro  --}}
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <input type="submit" id="enviaCadastro" class="btn btn-lg noBG border-green" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>
@endsection