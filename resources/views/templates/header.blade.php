<header>
    <!--    login/registro + campo de busca/carrinho    -->
    @if(Auth::check()) {{-- Usuario logado --}}
        <div class="row top-header">
            <div class="container">
                <!-- Boas vindas -->
                <div class="col-xs-5 col-sm-6 col-md-6 col-lg-6">
                    Seja Bem Vindo,
                    {{Auth::user()->nome}}.
                    (<a href="{{route('Logout')}}"><span class="color-green">Logout</span></a>)
                    <br>
                    @if(Auth::user()->admPower)
                        (<a href="{{route('paginaAdmin')}}" class="color-green">Área Administrativa</a>)
                    @endif
                </div>
                <!--    Search Form     -->
                <div class="col-xs-4 col-sm-3 col-md-4 col-lg-4 text-right">
                    <form class="navbar-form pull-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control input-sm in-btn-dark formBreak" placeholder="Buscar produtos">
                            <button class="btn btn-default btn-sm in-btn-dark" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                    </form>
                </div>
                <!--    Cart Shopping     -->
                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 mar-shop text-right cart">
                    <button class="btn btn-default btn-sm in-btn-dark" type="submit"><span
                                class="glyphicon glyphicon-shopping-cart"></span></button>
                    Carrinho <span class="color-green">( N )</span>
                </div>
            </div>
            <!--  .container -->
        </div>
        <!--  .row top header -->
    @else {{-- Visitante --}}
        <div class="row top-header">
            <div class="container">
                <!-- Boas vindas -->
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                    Seja Bem Vindo. Faça
                    <a href="" data-toggle="modal" data-target="#loginModal"><span class="color-green">Login</span></a>
                    ou
                    <a href="{{route('cadastrarUsuario')}}"><span class="color-green">cadastre-se</span></a>
                </div>
                <!--    Search Form     -->
                <div class="col-xs-4 col-sm-5 col-md-4 col-lg-4">
                    <form class="navbar-form pull-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control input-sm in-btn-dark" placeholder="Buscar produtos">
                            <button class="btn btn-default btn-sm in-btn-dark" type="submit"><span
                                        class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </form>
                </div>
                <!--    Error Messages     -->
                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                    <label id="authenticationErrors"></label>
                </div>
            </div>
            <!--  .container -->
        </div>
        <!--  .row top header -->
        <!-- Modal for login -->
        <div class="modal fade" id="loginModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Entre com sua conta</h4>
                    </div>
                    <form id="login-form" class="form-horizontal">
                        {!! csrf_field() !!}
                        {!! method_field("post") !!}
                        <div class="modal-body" id="login">
                            {{--Error Label--}}
                            <div class="form-group">
                                <label id="errorLabelLogin" class="col-md-2 control-label"></label>
                            </div>
                            {{--Email--}}
                            <div class="form-group">
                                <label for="login" class="col-md-2 control-label">E-mail</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" placeholder="exemplo&#64;exemplo.com"
                                           name="login" id="login">
                                </div>
                            </div>
                            {{--Senha--}}
                            <div class="form-group">
                                <label for="modalPassword" class="col-md-2 control-label">Senha</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="modalPassword" id="modalPassword" maxlength="20">
                                </div>
                            </div>
                        </div>
                        {{--Botão de esqueci a senha--}}
                        <div class="modal-footer">
                            <div class="verticalMarginModal row col-md-10 col-md-offset-1">
                                <input type="submit" id="loginNow" class="btn btn-lg btn-primary btn-block" value="Entrar">
                            </div>
                            <a href="#forgotPassword" id="forgot" data-toggle="tab" class="text-center col-md-12 col-xs-12"> Esqueci a
                                senha</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal for recovering -->
        <div class="modal fade" id="forgotPassword">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Esqueceu sua senha? Nos mande seu email e nós resetaremos!</h4>
                    </div>
                    <div class="modal-body" id="recover">
                        <form method="post" action="#" class="form-horizontal" id="recover_form" name="recover_form">
                            {!! csrf_field() !!}

                            {{--Email--}}
                            <div class="form-group">
                                <label for="login" class="col-md-2 control-label">E-mail</label>

                                <div class="col-md-8">
                                    <input type="email" placeholder="exemplo&#64;exemplo.com" name="modalEmail"
                                           id="modalEmail" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    {{--Botões--}}
                    <div class="modal-footer">
                        <div class="verticalMarginModal row col-md-10 col-md-offset-1">
                            <button type="submit" class="btn btn-lg btn-primary btn-block" data-dismiss="modal">
                                Enviar
                            </button>
                        </div>
                        <a href="#login" data-toggle="tab" id="forgetIt" class="text-center col-md-12 col-xs-12">Espere,
                            consegui lembrar!</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{--{!! Form::open(array('action' => array('SearchController@store'))) !!}--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('keyword', 'Procurar:') !!}--}}
        {{--{!! Form::text('keyword', null, ['class'=>'form-control border-green']) !!}--}}
        {{--{!! Form::submit('Search') !!}--}}
    {{--</div>--}}
    {{--{{Form::close()}}--}}
    <!--    menu principal  -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header pdMenu">
                <a href="{{route('paginaInicial')}}" class="navbar-brand">
                    <img class="img-logo" src="{{asset('img/logo.png')}}" alt="Logo RodaLOL">
                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">HARDWARE</a>
                        <ul class="dropdown-menu">
                            {{--@foreach($product as $product)--}}
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'Processador'])}}">Processadores</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'Placa Mãe'])}}">Placa Mãe</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'memória'])}}">Memórias</a></li>
                            <div class="divider"></div>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'Fonte'])}}">Fonte</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'Placa de Vídeo'])}}">Placa de Vídeo</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'Gabinete'])}}">Gabinete</a></li>
                            <div class="divider"></div>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'HD'])}}">HD</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'SSD'])}}">SSD</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'Rede'])}}">Redes & Wireless</a></li>
                            {{--@endforeach--}}

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PERIFÉRICOS</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'teclados'])}}">Teclados</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'mouse'])}}">Mouse</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'armazenamento'])}}">Armazenamento</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'acessórios'])}}">Acessórios</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ELETRÔNICOS</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'cabos'])}}">Cabos</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'adaptadores'])}}">Adaptadores</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MONITORES</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'led'])}}">Monitores LED</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'lcd'])}}">Monitores LCD</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'suporte'])}}">Suportes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ÁUDIO</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'caixa de som'])}}">Caixa de Som</a></li>
                            <li><a href="{{route('CategoriaProduto', ['categoria'=>'fone de ouvido'])}}">Fone de Ouvido</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('quemSomos')}}">QUEM SOMOS</a></li>
                    <li><a href="{{route('contato')}}">CONTATO</a></li>
                </ul>
            </div>
            <!--    .navbar-collapse    -->
        </div>
        <!--    .container    -->
    </nav>
    <!--    .navbar .navbar-default    -->
</header>