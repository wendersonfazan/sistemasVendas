<?php

namespace App\Http\Controllers;

use App\Repositories\{
    RepositoryProdutos,
};


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
}