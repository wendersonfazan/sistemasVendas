<?php

namespace App\Repositories;

use App\Models\Produtos;
use Illuminate\Support\Collection;

class RepositoryProdutos
{
    public function list(): Collection
    {
        return Produtos::all();
    }


    public function getProduct(int $id)
    {
        return Produtos::find($id);
    }

    public function getProductByFilter(array $dados)
    {

        $query = Produtos::select('produtos.id', 'produtos.nome', 'produtos.preco', 'produtos.referencia');

        if ($dados['produto']) {
            $query->where('nome', 'like', '%' . $dados['produto'] . '%');
        }

        if ($dados['referencia']) {
            $query->where('referencia', '=', $dados['referencia']);
        }
        

        return $query->get();
    }

}