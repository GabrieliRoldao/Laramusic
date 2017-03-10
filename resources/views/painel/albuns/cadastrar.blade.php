@extends('layouts.template-painel')

@section('titulo')
    <title>Cadastro de album</title>
@endsection

@section('conteudo')
    <section class="formulario">
        <div class="container">
            @include('includes.info')
            <h1 class="titulo">Adicionar novo álbum</h1>
            <form action="{{ route('painel.albuns.salvar') }}" class="form-formulario" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Insira o nome do album" class="form-control"
                    value="{{ old('nome') }}">
                </div>
                <div class="form-group">
                    <input type="text" name="artista" placeholder="Insira o nome do(s) artista(s)" class="form-control"
                    value="{{ old('artista') }}">
                </div>
                <div class="form-group">
                    <select name="id_estilo" class="selectpicker form-control" data-live-search="true">
                        <option value="">Escolha um estilo</option>
                        @foreach($estilos as $estilo)
                            <option value="{{ $estilo->id }}">{{ $estilo->nome }} </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </section>
@endsection