@extends('layouts.template-painel')

<title>Edição de estilo musical</title>
@section('conteudo')
    <section class="formulario">
        <div class="container">
            @include('includes.erros')
            <h1 class="titulo">Alterar estilo musical</h1>
            <form action="{{ route('painel.estilos.alterar', ['id_estilo' => $estilo->id]) }}" class="form-formulario" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Insira o nome do estilo" class="form-control"
                           value="{{ $estilo->nome or old('nome')}}">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </section>
@endsection