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

}