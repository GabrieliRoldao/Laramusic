<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\BaseController;
use App\Models\Painel\Album;
use App\Models\Painel\Estilo;
use Illuminate\Http\Request;

use App\Http\Requests;

class AlbumController extends BaseController
{
    protected $request, $model;
    protected $nrPaginacao;
    protected $nomeDaRota = "painel.albuns";

    public function __construct(Request $request, Album $album, int $nrPaginacao = 20)
    {
        $this->request = $request;
        $this->model = $album;
        $this->nrPaginacao = $nrPaginacao;
    }

    public function cadastrarDado()
    {
        $estilos = Estilo::get();

        return view('painel.albuns.cadastrar', ['estilos' => $estilos]);
    }

    public function editarDado(int $id)
    {
        $estilos = Estilo::get();
        $album = Album::find($id);

        return view('painel.albuns.editar', ['estilos' => $estilos, 'album' => $album]);
    }
}
