@extends('layouts.template-painel')
@push('meta.xcsrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('titulo')
    <title>Lista de músicas cadastradas</title>
@endsection

@section('conteudo')
    @include('includes.acaoes-painel')
    <section class="lista">
        <div class="container">
            @include('includes.info')
            @include('includes.snackbar')
            <h1 class="titulo">Músicas cadastradas</h1>
            <a href="{{ route('painel.musicas.cadastrar') }}" class="adicionar">
                <i class="fa fa-plus-circle item-adicionar" aria-hidden="true"></i>
                Novo estilo
            </a>
            <table class="table table-hover tabela">
                <thead>
                <tr>
                    <th>Música</th>
                    <th>Ações</th>
                </tr>
                </thead>
                @forelse($dados as $musica)
                    <tr>
                        <td>{{ $musica->nome }}</td>
                        <td class="td-acoes">
                            <a href="{{ route('painel.musicas.editar', ['id_musica' => $musica->id]) }}" class="item-editar">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="item-excluir" data-toggle="modal"
                               data-target="#myModal" data-id="{{ $musica->id }}" data-estilo="{{ $musica->nome }}">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Não há músicas! :c</td>
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
