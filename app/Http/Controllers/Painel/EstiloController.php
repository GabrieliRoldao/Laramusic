<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Http\Requests;
use App\Models\Painel\Estilo;

class EstiloController extends BaseController
{
    protected $request, $model;
    protected $nrPaginacao;
    protected $nomeDaRota = "painel.estilos";

    public function __construct(Request $request, Estilo $estilo, int $nrPaginacao = 10)
    {
        $this->request = $request;
        $this->model = $estilo;
        $this->nrPaginacao = $nrPaginacao;
    }
}
