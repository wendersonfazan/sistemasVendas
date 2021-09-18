<?php

namespace App\Repositories;

use App\Models\{
    Vendas,
    Produtos
};
use Carbon\Carbon;
use Illuminate\Support\Collection;


class RepositoryVendas
{

    public function list(): Collection
    {
        return Vendas::all();
    }

    public function confirmVenda(array $dados)
    {
        $produto = Produtos::find($dados['produto']);

        $vendas = new Vendas;
        $vendas->produto_id = $dados['produto'];
        $vendas->valor_venda = $produto->preco;
        $vendas->endereco = $dados['endereco'];
        $vendas->numero = $dados['numero'];
        $vendas->bairro = $dados['bairro'];
        $vendas->cidade = $dados['cidade'];
        $vendas->estado = $dados['estado'];
        $vendas->cep = $dados['cep'];
        $vendas->created_at = Carbon::now();
        $vendas->save();
    }
}