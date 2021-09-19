<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{
    RepositoryProdutos,
};
use App\Models\Fornecedores;

class ProdutosController extends Controller
{

    private $repositoryProdutos;

    public function __construct(RepositoryProdutos $repositoryProdutos) {
        $this->repositoryProdutos = $repositoryProdutos;
    }


    public function index()
    {
        $lists = $this->repositoryProdutos->list();

        return view('produtos.index', [
            'lists' => $lists,
        ]);
    }


    public function getProduct(Request $request)
    {
        $dados = $request->input();

        $produto = $this->repositoryProdutos->getProduct($dados['produto']);
        $listFornecedores = $produto->fornecedores;

        $fornecedores = [];
        foreach ($listFornecedores as $data) {
            $fornecedor = Fornecedores::find($data['fornecedor_id']);
            $fornecedores [] = $fornecedor->nome;
        }

        echo json_encode([
            'preco' => $produto->preco,
            'referencia' => $produto->reference,
            'fornecedores' => implode(', ', $fornecedores),
        ]);
    }

    public function getProductByFilter(Request $request)
    {
        $dados = $request->input();
        $produtos = $this->repositoryProdutos->getProductByFilter($dados);

        return view('produtos.table', [
            'lists' => $produtos,
        ]);
    }

}