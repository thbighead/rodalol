@extends('masterpage')

@section('title', 'Quem Somos?')

@section('content')
    <ol class="breadcrumb">
        <li><a href="<?php echo url('/'); ?>">Home</a></li>
        <li class="active">Quem somos</li>
    </ol>
    <div class="container">
        <h3>Quem somos</h3>

        <div class="col-md-3">
            <img src="{{asset('img/quemsomos.jpg')}}" class="img-responsive" alt="Imagem 1">
        </div>
        <div class="col-md-9">
            <div class="text-left">
                Fundada em (ano da fundação, por exemplo, 1998) pelo Senhor (nome do fundador), a principal missão da empresa (nome da empresa) é oferecer (coloque aqui o que sua empresa vende ou oferece). Nossos principais clientes são (nome dos clientes atuais) e atualmente contamos com XX funcionários.
            </div>
        </div>
    </div>
@endsection