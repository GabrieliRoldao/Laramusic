<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Painel\Estilo;
use Validator;

class EstiloController extends Controller
{
    protected $request, $estilo;

    public function __construct(Request $request, Estilo $estilo)
    {
        $this->request  = $request;
        $this->estilo   = $estilo;
    }

    public function carregarEstilos()
    {
        $estilos = $this->estilo->paginate(10);
        return view('painel.estilos.listar', ['estilos' => $estilos]);
    }


    public function cadastrarEstilo()
    {
        return view('painel.estilos.cadastrar');
    }

    public function salvarEstilo()
    {
        $estiloNome = $this->request->all();

        $validacao = Validator::make($estiloNome, $this->estilo->regras, $this->estilo->mensagem());

        if ( $validacao->fails() ) {
           // dd($validacao);
            return redirect()->route('painel.estilos.cadastrar')
                                    ->withErrors($validacao)
                                    ->withInput();
        }

        $salvar = $this->estilo->create($estiloNome);

        if ($salvar)
            return redirect()->route('painel.estilos.listar')
                                    ->with(['sucesso' => 'Estilo cadastrado!'])
                                    ->withInput();
        else
            return redirect()->route('painel.estilos.cadastrar')
                ->withErrors(['errors' => 'Não foi possível cadastrar o estilo! Verifique o mesmo foi preenchido corretamente.'])
                ->withInput();
    }

    public function editarEstilo(int $id)
    {
        $estilo = $this->estilo->find($id);
        return view('painel.estilos.editar', ['estilo' => $estilo]);
    }

    public function alterarEstilo(int $id)
    {
        $dadosEstilo = $this->request->all();
        $estiloAlterado = $this->estilo->find($id);

        $validacao = Validator::make($dadosEstilo, $this->estilo->regras, $this->estilo->mensagem());

        if ($validacao->fails())
            return 'deu merdaa';

        $estiloAlterado->nome = $dadosEstilo['nome'];

        if ($estiloAlterado->update())
            return redirect()->route('painel.estilos.listar')
                ->with(['sucesso' => 'Estilo alterado!'])
                ->withInput();
        else
            return redirect()->route('painel.estilos.editar')
                ->withErrors(['errors' => 'Não foi possível editar o estilo! Verifique o mesmo foi preenchido corretamente.'])
                ->withInput();
    }
}
