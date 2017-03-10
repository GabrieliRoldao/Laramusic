<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable = ['nome'];

    public $regras = [
        'nome' => 'required|min:3|max:100|string'
    ];

    public function mensagem()
    {
        return [
            'nome.required' => 'Nome do estilo é obrigatório!'
        ];
    }
}
