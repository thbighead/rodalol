<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Bootstrap Optional theme -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">--}}
    <!-- My own css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!--    JAVASCRIPTS (porque resolvemos por isso aqui na head mesmo: http://stackoverflow.com/questions/436411/where-is-the-best-place-to-put-script-tags-in-html-markup   -->
    <!-- Latest compiled and minified JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" defer></script>
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" defer></script>
    <!-- My JS's -->
    @yield('js')
    <!-- Our Script -->
    <script src="{{asset('js/javascript.js')}}" defer></script>
    <title>RodaLOL - @yield('title')</title>
</head>
<body>
    {{--parte de cima do site--}}
    @include('templates.header')
    {{--Conteudo da pagina aqui!--}}
    @yield('content')
    {{--parte de baixo do site--}}
    @include('templates.footer')
</body>
</html>