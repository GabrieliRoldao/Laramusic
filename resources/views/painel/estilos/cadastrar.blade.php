@extends('layouts.template-painel')

@section('conteudo')
    <section class="formulario">
        <div class="container">
            @include('includes.erros')
            <h1 class="titulo">Gestão de usuário</h1>
            <form action="{{ route('painel.estilos.salvar') }}" class="form-formulario" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Insira o nome do estilo" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </section>
@endsection