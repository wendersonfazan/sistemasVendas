<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{
    RepositoryVendas,
    RepositoryProdutos,
};

class VendasController extends Controller
{
    private $repositoryVendas;
    private $repositoryProdutos;

    public function __construct(
        RepositoryVendas $repositoryVendas,
        RepositoryProdutos $repositoryProdutos
    ) {
        $this->repositoryVendas = $repositoryVendas;
        $this->repositoryProdutos = $repositoryProdutos;
    }

    public function index()
    {
        $lists = $this->repositoryVendas->list();

        return view('vendas.index', [
            'lists' => $lists,
        ]);
    }


    public function add()
    {
        $produtos = $this->repositoryProdutos->list();

        return view('vendas.add', [
            'produtos' => $produtos,
        ]);
    }


    public function ConfirmVenda(Request $request)
    {
        $dados = $request->input();
        $vendas = $this->repositoryVendas->list();

        $this->repositoryVendas->confirmVenda($dados);

        return redirect()->route('vendas.index', ['lists' => $vendas]);


    }
}
