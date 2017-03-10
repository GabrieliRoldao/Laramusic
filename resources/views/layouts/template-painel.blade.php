<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('meta.xcsrf')
        @yield('titulo')

        <!-- CSS files -->
        <link rel="stylesheet" href="{{ url('assets/geral/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/geral/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/painel/css/laramusic-painel.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

        <!-- Favicon -->
        <link rel="icon" href="{{ url('assets/painel/imgs/favicon-laramusic.png') }}" type="image/png">
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            @include('includes.header-painel')
        </div>
    </div>

    @yield('conteudo')

    @include('includes.footer-painel')

    <!-- JS files -->
    <script src="{{ url('assets/geral/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('assets/geral/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/painel/js/acoes.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="{{ url('assets/painel/js/defaults-pt_BR.js') }}"></script>

    </body>
</html>