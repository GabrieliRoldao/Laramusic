@extends('layouts.template-painel');

@push('meta.xcsrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('titulo')
    <title>Resultados da pesquisa</title>
@endsection

@section('conteudo')
    @include('includes.acaoes-painel')
    <section class="lista">
        <div class="container">
            @include('includes.info')
            @include('includes.snackbar')
            <h1 class="titulo">Resultado da pesquisa</h1>
            <table class="table table-hover tabela">
                <thead>
                <tr>
                    <th>Estilo</th>
                    <th>Ações</th>
                </tr>
                </thead>
                @forelse($dados as $dado)
                    <tr>
                        <td>{{ $dado->nome }}</td>
                        <td class="td-acoes">
                            <a href="{{ route('painel.estilos.editar', ['id' => $dado->id]) }}" class="item-editar">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="item-excluir" data-toggle="modal"
                               data-target="#myModal" data-id="{{ $dado->id }}" data-estilo="{{ $dado->nome }}">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Não há estilos registrados! :c</td>
                    </tr>
                @endforelse
            </table>
            @include('includes.modal')
            <nav aria-label="Page navigation" class="text-center">
                {{ $dados->links() }}
            </nav>
        </div>
    </section>
@endsection