<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $titulo or 'Painel LaraMusic' }}</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="{{ url('assets/geral/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/geral/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/painel/css/laramusic-painel.css') }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ url('assets/painel/imgs/favicon-laramusic.png') }}" type="image/png">
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            @include('includes.header-painel')
        </div>
    </div>

    @include('includes.acaoes-painel')

    @yield('conteudo')

    @include('includes.footer-painel')


    <!-- JS files -->
    <script src="{{ url('assets/geral/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('assets/geral/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/painel/js/menu.js') }}"></script>

    </body>
</html>