<?php

namespace App\Repositories;

use App\Models\Fornecedores;
use Illuminate\Support\Collection;

class RepositoryFornecedores
{

    public function list(): Collection
    {
        return Fornecedores::all();
    }

}