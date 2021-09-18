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

}