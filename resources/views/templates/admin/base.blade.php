<!doctype html>
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
    <title>RodaLOL - @yield('title')</title>
</head>
<body>
    {{--parte de cima do site--}}
    @include('templates.admin.header')
    {{--Conteudo da pagina aqui!--}}
    @yield('content')

    <!--    JAVASCRIPTS (porque resolvemos por isso aqui na head mesmo: http://stackoverflow.com/questions/436411/where-is-the-best-place-to-put-script-tags-in-html-markup   -->
    <!-- Latest compiled and minified JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" defer></script>
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" defer></script>
    <!-- My JS's (Por causa dos malditos templates, os scripts de paginas que vão usar essa precisam ficar no final do body mesmo...) -->
    <!-- Our Script -->
    <script src="{{asset('js/baseAdmin.js')}}" defer></script>
    @yield('js')
</body>
</html>