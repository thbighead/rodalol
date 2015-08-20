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
    <title>RodaLOL - @yield('title')</title>
</head>
<body>
    {{--parte de cima do site--}}
    @include('templates.header')
    {{--Conteudo da pagina aqui!--}}
    @yield('content')
    {{--parte de baixo do site--}}
    @include('templates.footer')

    <!--    JAVASCRIPTS    -->
    <!-- Latest compiled and minified JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- JQuery Validate -->
    <script src="{{asset('lib/jquery.validate.min.js')}}"></script>
    <!-- Additional methods for JQuery Validate -->
    <script src="{{asset('lib/additional-methods.min.js')}}"></script>
    <!-- Our Script -->
    <script src="{{asset('js/base.js')}}"></script>
    <!-- My JS's (Por causa dos malditos templates, os scripts de paginas que vão usar essa precisam ficar no final do body mesmo...) -->
    @yield('js')
</body>
</html>