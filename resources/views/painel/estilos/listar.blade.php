@extends('layouts.template-painel')

@section('conteudo')
    @include('includes.acaoes-painel')

    <section class="lista">
        <div class="container">
            @include('includes.sucesso')
            <h1 class="titulo">Estilos cadastrados</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Estilo</th>
                        <th>Ações</th>
                        <th>
                            <a href="{{ route('painel.estilos.cadastrar') }}" class="adicionar">
                                <i class="fa fa-plus-circle item-adicionar" aria-hidden="true"></i>
                                Novo estilo
                            </a>
                        </th>
                    </tr>
                </thead>
                @foreach($estilos as $estilo)
                    <tr>
                        <td>{{ $estilo->nome }}</td>
                        <td class="td-acoes">
                            <a href="{{ route('painel.estilos.editar', ['id_estilo' => $estilo->id]) }}" class="item-editar">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="" class="item-excluir">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <nav aria-label="Page navigation" class="text-center">
                {{ $estilos->links() }}
            </nav>
        </div>
    </section>
@endsection
