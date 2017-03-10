@extends('layouts.template-painel')
@push('meta.xcsrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('titulo')
    <title>Lista de albuns cadastrados</title>
@endsection

@section('conteudo')
    @include('includes.acaoes-painel')
    <section class="lista">
        <div class="container">
            @include('includes.info')
            @include('includes.snackbar')
            <h1 class="titulo">Albuns cadastrados</h1>
            <a href="{{ route('painel.albuns.cadastrar') }}" class="adicionar">
                <i class="fa fa-plus-circle item-adicionar" aria-hidden="true"></i>
                Novo Album
            </a>
            <table class="table table-hover tabela">
                <thead>
                <tr>
                    <th>Album</th>
                    <th>Artista</th>
                    <th>Ações</th>
                </tr>
                </thead>
                @forelse($dados as $album)
                    <tr>
                        <td>{{ $album->nome }}</td>
                        <td>{{ $album->artista }}</td>
                        <td class="td-acoes">
                            <a href="{{ route('painel.albuns.editar', ['id_estilo' => $album->id]) }}" class="item-editar">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="item-excluir" data-toggle="modal"
                               data-target="#myModal" data-id="{{ $album->id }}" data-estilo="{{ $album->nome }}">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Não há albuns registrados! :c</td>
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
