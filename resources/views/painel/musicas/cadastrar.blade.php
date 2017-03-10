@extends('layouts.template-painel')

@section('titulo')
    <title>Cadastro de estilos</title>
@endsection

@section('conteudo')
    <section class="formulario">
        <div class="container">
            @include('includes.info')
            <h1 class="titulo">Cadastrar nova música</h1>
            <form action="{{ route('painel.musicas.salvar') }}" class="form-formulario" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Insira o nome do estilo" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </section>
@endsection