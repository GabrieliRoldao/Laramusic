<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    protected $fillable = ['nome'];

    public $regras = [
        'nome' => 'required|min:3|max:30|string'
    ];

    public function mensagem()
    {
        return [
          'nome.required' => 'Nome do estilo é obrigatório!!'
        ];
    }
}
