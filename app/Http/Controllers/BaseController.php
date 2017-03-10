<?php

namespace App\Http\Controllers;

/**
 * Class BaseController
 * Controller base para toda parte de administração de estilos, musicas e albuns
 *
 * @package App\Http\Controllers
 */
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Validator;

class BaseController extends Controller
{
    protected $nrPaginacao = 10;


    public function carregarDados()
    {
        $dados = $this->model->paginate($this->nrPaginacao);
        return view("{$this->nomeDaRota}.listar", ['dados' => $dados]);
    }


    public function cadastrarDado()
    {
        return view("{$this->nomeDaRota}.cadastrar");
    }

    public function salvarDado()
    {
        $dadoNome = $this->request->all();

        $validacao = Validator::make($dadoNome, $this->model->regras, $this->model->mensagem());

        if ( $validacao->fails() ) {
            return redirect()->route("{$this->nomeDaRota}.cadastrar")
                ->withErrors($validacao)
                ->withInput();
        }

        $salvar = $this->model->create($dadoNome);

        if ($salvar)
            return redirect()->route("{$this->nomeDaRota}.listar")
                ->with(['sucesso' => 'Cadastro realizado com sucesso!'])
                ->withInput();
        else
            return redirect()->route("{$this->nomeDaRota}.cadastrar")
                ->withErrors(['errors' => 'Não foi possível realizar o cadastro! Verifique o mesmo foi preenchido corretamente.'])
                ->withInput();
    }

    public function editarDado(int $id)
    {
        $dado = $this->model->find($id);
        return view("{$this->nomeDaRota}.editar", ['dado' => $dado]);
    }

    public function alterarDado(int $id)
    {
        $dados = $this->request->all();
        $dadoAlterado = $this->model->find($id);

        $validacao = Validator::make($dados, $this->model->regras, $this->model->mensagem());

        if ($validacao->fails())
            return 'Os dados informados estão incorretos. Por favor, verifique-os!';


        if( isset($dados['nome']) )
            $dadoAlterado->nome = $dados['nome'];
        elseif ( isset($dados['titulo']) ) {
            $dadoAlterado->titulo = $dados['titulo'];
            $dadoAlterado->artista = $dados['artista'];
            $dadoAlterado->id_estilo = $dados['id_estilo'];
        }


        if ($dadoAlterado->update()){
            return redirect()->route("{$this->nomeDaRota}.listar")
                ->with(['sucesso' => 'Deu tudo certinho! c:'])
                ->withInput();
        }
        else
            return redirect()->route("{$this->nomeDaRota}.editar")
                ->withErrors(['errors' => 'Não foi possível realizar a alteração! Verifique tudo foi preenchido corretamente.'])
                ->withInput();
    }

    public function excluirDado(int $id)
    {
        $dado = $this->model->find($id);

        if ($dado) {
            $dado->delete();
            return response()->json(['sucesso' => true, 'mensagem' => 'Excluído com sucesso!']);
        }
        else {
            return 'falhou';
        }
    }

    public function pesquisarDado()
    {
        $dadoProcurado = $this->request->get('input_pesquisar');

        $dados = $this->model->where('nome', 'like', "%$dadoProcurado%")->paginate($this->nrPaginacao);

        return view("{$this->nomeDaRota}.listar", ['dados' => $dados]);
    }

}