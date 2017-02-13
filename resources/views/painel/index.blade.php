@extends('layouts.template-painel')

@section('conteudo')
    <section class="relatorios">
        <div class="container">
            <ul class="opcao-relatorios col-md-12">
                <li class="col-md-6 text-center">
                    <a href="">
                        <img src="{{ url('assets/painel/imgs/albuns-laramusic.png') }}" alt="Músicas" class="menu-item-img">
                        <p>5456</p>
                    </a>
                </li>
                <li class="col-md-6 text-center">
                    <a href="">
                        <img src="{{ url('assets/painel/imgs/estilos-laramusic.png') }}" alt="Músicas" class="menu-item-img">
                        <p>12</p>
                    </a>
                </li>
                <li class="col-md-6 text-center">
                    <a href="">
                        <img src="{{ url('assets/painel/imgs/music-laramusic.png') }}" alt="Músicas" class="menu-item-img">
                        <p>89498</p>
                    </a>
                </li>
                <li class="col-md-6 text-center">
                    <a href="">
                        <img src="{{ url('assets/painel/imgs/perfil-laramusic.png') }}" alt="Músicas" class="menu-item-img">
                        <p>1000</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection