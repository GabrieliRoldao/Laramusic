@extends('layouts.template-painel')

@section('conteudo')
    <section class="lista">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>Gabrieli Roldão</td>
                    <td>gabrieli@email.com</td>
                    <td>21</td>
                    <td class="td-acoes">
                        <a href="" class="item-editar">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="" class="item-excluir">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Gabrieli Roldão</td>
                    <td>gabrieli@email.com</td>
                    <td>21</td>
                    <td>
                        <a href="" class="item-editar">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="" class="item-excluir">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Gabrieli Roldão</td>
                    <td>gabrieli@email.com</td>
                    <td>21</td>
                    <td>
                        <a href="" class="item-editar">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="" class="item-excluir">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Gabrieli Roldão</td>
                    <td>gabrieli@email.com</td>
                    <td>21</td>
                    <td>
                        <a href="" class="item-editar">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="" class="item-excluir">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            </table>
            <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
