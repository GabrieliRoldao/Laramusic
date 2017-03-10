<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable = [
        'id_estilo',
        'nome',
        'artista'
    ];

    public $regras = [
        'id_estilo' => 'required',
        'nome'    => 'required|min:1|max:20',
        'artista'   => 'required|min:1|max:50'
    ];


    public function mensagem()
    {
        return [
            'id_estilo.required' => 'Por favor, escolha um estilo!',
            'nome.required'    => 'O nome do álbum é obrigatório!',
            'artista.required'   => 'O nome do(s) artista(s) é obrigatório!'
        ];
    }
}
