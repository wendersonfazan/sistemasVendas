<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    public function fornecedores()
    {
        return $this->hasMany(FornecedoresXProdutos::class, 'produto_id', 'id');
    }

    public function scopeJoinFornecedoresXProdutos($query)
    {
        return $query->join('fornecedores_x_produtos', 'fornecedores_x_produtos.produto_id', '=', 'produtos.id');

    }
}