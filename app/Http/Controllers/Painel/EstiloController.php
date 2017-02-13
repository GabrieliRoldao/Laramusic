<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class EstiloController extends Controller
{
    public function carregarEstilos()
    {
        return view('painel.estilos.listar');
    }


    public function cadastrarEstilo()
    {
        return view('painel.estilos.cadastrar');
    }

    public function editarEstilos()
    {

    }
}
