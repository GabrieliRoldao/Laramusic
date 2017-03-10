<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\BaseController;
use App\Models\Painel\Musica;
use Illuminate\Http\Request;
use App\Http\Requests;

class MusicaController extends BaseController
{
    protected $request, $model;
    protected $nrPaginacao;
    protected $nomeDaRota = "painel.musicas";

    public function __construct(Request $request, Musica $musica, int $nrPaginacao = 10)
    {
        $this->request = $request;
        $this->model = $musica;
        $this->nrPaginacao = $nrPaginacao;
    }
}
