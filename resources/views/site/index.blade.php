@extends('layouts.template-site')

@section('conteudo')
    <section class="albuns">
        <div class="container">
            <h1 class="titulo">Últimos albuns adicionados</h1>
            <div class="lista-albuns col-md-12">
                <article class="col-md-3 album">
                    <a href="album">
                        <div class="album-imagem">
                            <img src="{{ URL::asset('assets/site/imgs/sitekit-music.png') }}" alt="Nome do Album" class="img-album">
                            <div class="album-hover">
                                <i class="fa fa-headphones" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                    <a href=""><span class="titulo-album">Nome do album</span></a>
                </article>
                <article class="col-md-3 album">
                    <a href="album">
                        <div class="album-imagem">
                            <img src="{{ URL::asset('assets/site/imgs/sitekit-music.png') }}" alt="Nome do Album" class="img-album">
                            <div class="album-hover">
                                <i class="fa fa-headphones" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                    <a href=""><span class="titulo-album">Nome do album</span></a>
                </article>
                <article class="col-md-3 album">
                    <a href="album">
                        <div class="album-imagem">
                            <img src="{{ URL::asset('assets/site/imgs/sitekit-music.png') }}" alt="Nome do Album" class="img-album">
                            <div class="album-hover">
                                <i class="fa fa-headphones" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                    <a href=""><span class="titulo-album">Nome do album</span></a>
                </article>
                <article class="col-md-3 album">
                    <a href="album">
                        <div class="album-imagem">
                            <img src="{{ URL::asset('assets/site/imgs/sitekit-music.png') }}" alt="Nome do Album" class="img-album">
                            <div class="album-hover">
                                <i class="fa fa-headphones" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                    <a href=""><span class="titulo-album">Nome do album</span></a>
                </article>
            </div>
        </div>
    </section>

    <div class="clear"></div>

    <hr class="hr">

    <section class="estilos-musica">
        <div class="container">
            <h1 class="titulo">Estilos músicais</h1>
            <div class="estilos col-md-12">
                <div class="col-md-3">
                    <ul class="lista-estilos">
                        <li><a href="estilo" class="estilo">Eletrônica</a></li>
                        <li><a href="estilo" class="estilo">Rap</a></li>
                        <li><a href="estilo" class="estilo">Rock</a></li>
                        <li><a href="estilo" class="estilo">Sertanejo</a></li>
                        <li><a href="estilo" class="estilo">Pop</a></li>
                        <li><a href="estilo" class="estilo">Latino</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="lista-estilos">
                        <li><a href="estilo" class="estilo">Hip-Hop</a></li>
                        <li><a href="estilo" class="estilo">R&B</a></li>
                        <li><a href="estilo" class="estilo">Funk</a></li>
                        <li><a href="estilo" class="estilo">Axé</a></li>
                        <li><a href="estilo" class="estilo">Forró</a></li>
                        <li><a href="estilo" class="estilo">Tradicionais</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="lista-estilos">
                        <li><a href="estilo" class="estilo">Pagode</a></li>
                        <li><a href="estilo" class="estilo">Samba</a></li>
                        <li><a href="estilo" class="estilo">Indie/Alternativa</a></li>
                        <li><a href="estilo" class="estilo">Pop-rock</a></li>
                        <li><a href="estilo" class="estilo">K-pop</a></li>
                        <li><a href="estilo" class="estilo">Punk</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="lista-estilos">
                        <li><a href="estilo" class="estilo">Metal</a></li>
                        <li><a href="estilo" class="estilo">Jazz</a></li>
                        <li><a href="estilo" class="estilo">Blues</a></li>
                        <li><a href="estilo" class="estilo">Clássica</a></li>
                        <li><a href="estilo" class="estilo">Folk</a></li>
                        <li><a href="estilo" class="estilo">Bossa Nova</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection