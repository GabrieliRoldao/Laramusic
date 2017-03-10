<header class="cabecalho">
    <a href="{{ route('painel.index') }}">
        <img src="{{ url('assets/painel/imgs/laramusic-branca.png') }}" alt="LaraMusic" class="logo-img col-md-4">
    </a>
    <nav class="menu" id="menu">
        <ul>
            <li>
                <a href="{{ route('painel.albuns.listar') }}">
                    <img src="{{ url('assets/painel/imgs/albuns-laramusic.png') }}" alt="Albuns" class="menu-item-img">
                    <p>Albuns</p>
                </a>
            </li>
            <li>
                <a href="{{ route('painel.estilos.listar') }}">
                    <img src="{{ url('assets/painel/imgs/estilos-laramusic.png') }}" alt="Estilos" class="menu-item-img">
                    <p>Estilos</p>
                </a>
            </li>
            <li>
                <a href="{{ route('painel.musicas.listar') }}">
                    <img src="{{ url('assets/painel/imgs/music-laramusic.png') }}" alt="Músicas" class="menu-item-img">
                    <p>Músicas</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ url('assets/painel/imgs/perfil-laramusic.png') }}" alt="Perfil" class="menu-item-img">
                    <p>Perfil</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ url('assets/painel/imgs/sair-laramusic.png') }}" alt="Sair" class="menu-item-img">
                    <p>Sair</p>
                </a>
            </li>
            <li class="icon">
                <a href="javascript:void(0);">
                    <span class=" glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="clear"></div>
</header>