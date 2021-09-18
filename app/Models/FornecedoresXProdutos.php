<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FornecedoresXProdutos extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fornecedores_x_produtos';


    public function fornecedor()
    {
        return $this->belongsTo(Fornecedores::class, 'fornecedor_id', 'id');
    }

}