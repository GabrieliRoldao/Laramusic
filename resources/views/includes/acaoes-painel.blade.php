<section class="acoes">
    <div class="container">
        @if( Request::is('painel/estilos') )
        <form action="{{ route('painel.estilos.pesquisar') }}" class="form-pesquisar" method="post">
        @elseif(Request::is('painel/albuns'))
        <form action="{{ route('painel.albuns.pesquisar') }}" class="form-pesquisar" method="post">
        @elseif(Request::is('painel/musicas'))
        <form action="{{ route('painel.musicas.pesquisar') }}" class="form-pesquisar" method="post">
        @endif
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="input_pesquisar" placeholder="Pesquise uma música, album ou artista"
                       class="input-pesquisar">
                <input type="submit" name="btn_pesquisar" value="Procurar" class="btn btn-danger botao">
            </div>
        </form>
    </div>
</section>

