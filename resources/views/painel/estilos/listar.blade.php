@extends('layouts.template-painel')
@push('meta.xcsrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('titulo')
    <title>Lista de estilos cadastrados</title>
@endsection

@section('conteudo')
    @include('includes.acaoes-painel')
    <section class="lista">
        <div class="container">
            @include('includes.info')
            @include('includes.snackbar')
            <h1 class="titulo">Estilos cadastrados</h1>
            <a href="{{ route('painel.estilos.cadastrar') }}" class="adicionar">
                <i class="fa fa-plus-circle item-adicionar" aria-hidden="true"></i>
                Novo estilo
            </a>
            <table class="table table-hover tabela">
                <thead>
                    <tr>
                        <th>Estilo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                @forelse($dados as $estilo)
                    <tr>
                        <td>{{ $estilo->nome }}</td>
                        <td class="td-acoes">
                            <a href="{{ route('painel.estilos.editar', ['id_estilo' => $estilo->id]) }}" class="item-editar">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="item-excluir" data-toggle="modal"
                               data-target="#myModal" data-id="{{ $estilo->id }}" data-estilo="{{ $estilo->nome }}">
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
