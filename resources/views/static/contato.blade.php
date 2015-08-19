@extends('templates.base')

@section('js')
    <!-- Recaptcha Google -->
    <script src='http://www.google.com/recaptcha/api/js/recaptcha_ajax.js'></script>
    <!-- JQuery Validate -->
    <script src="{{asset('lib/jquery.validate.min.js')}}"></script>
    <!-- Additional methods for JQuery Validate -->
    <script src="{{asset('lib/additional-methods.min.js')}}"></script>
    <!-- enviarContato.js -->
    <script src="{{asset('js/enviarContato.js')}}"></script>
@endsection

@section('title', 'Contato')

@section('content')
    <section class="acertaBreadcrumb bg-light">
        <div class="container">
            <ol class="breadcrumb tiraBorda">
                <li><a href="{{route('paginaInicial')}}">Home</a></li>
                <li class="active">Contato</li>
            </ol>
        </div>{{--  .container --}}
    </section>{{--  #breadcrumb --}}
    <div class="container">
        <h3>Mande uma mensagem para a gente:</h3>

        <form id="form-contato" class="form-horizontal">
            {!! csrf_field() !!}
            {!! method_field("post") !!}

            <div class="form-group">
                <label id="status" class="col-md-3 control-label"></label>
            </div>{{-- Campo Status --}}

            <div class="form-group">
                <label for="nome" class="col-md-2 control-label">Nome:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control border-green" placeholder="Creydson" name="nome" id="nome">
                </div>
            </div>{{--  Campo Nome  --}}

            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control border-green" placeholder="creydson&#64;rodalol.com" name="email" id="email">
                </div>
            </div>{{--  Campo Email  --}}

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
            </div>{{--  Campo Sexo  --}}

            <div class="form-group">
                <label for="estado" class="col-md-2 control-label">Estado:</label>
                <div class="col-md-2">
                    <select class="estados form-control border-green widthForm" name="estado" id="estado">
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
                <label for="msg" class="col-md-2 control-label">Mensagem:</label>
                <div class="col-md-8">
                    <textarea class="form-control border-green" placeholder="Escreva sua mensagem aqui." name="msg" id="msg" rows="10"></textarea>
                </div>
            </div>{{--  Campo Mensagem  --}}

            <div class="form-group">
                <div id="captcha" class="col-md-10 col-md-offset-2 g-recaptcha"></div>
            </div>{{--  Campo Recaptcha  --}}

            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <input type="submit" class="btn btn-lg noBG border-green" id="enviaMensagem" value="Enviar">
                </div>
            </div>{{--  Campo Enviar  --}}
        </form>
    </div>
@endsection