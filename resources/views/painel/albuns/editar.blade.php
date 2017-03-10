@extends('layouts.template-painel')

@section('titulo')
    <title>Edição do álbum bla bla</title>
@endsection

@section('conteudo')
    <section class="formulario">
        <div class="container">
            @include('includes.info')
            <h1 class="titulo">Alterar álbum</h1>
            <form action="{{ route('painel.albuns.alterar', ['id_album' => $album->id]) }}" class="form-formulario" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Insira o novo titulo do album" class="form-control"
                           value="{{ $album->nome or old('nome')}}">
                </div>
                <div class="form-group">
                    <input type="text" name="artista" placeholder="Insira o novo artista" class="form-control"
                           value="{{ $album->artista or old('artista')}}">
                </div>
                <div class="form-group">
                    <select name="id_estilo" class="selectpicker form-control" data-live-search="true" data-language="">
                        <option value="">Escolha um estilo</option>
                        @foreach($estilos as $estilo)
                            @if($estilo->id == $album->id_estilo)
                                <option value="{{ $estilo->id }}" selected>{{ $estilo->nome }}</option>
                            @else
                                <option value="{{ $estilo->id }}">{{ $estilo->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </section>
@endsection