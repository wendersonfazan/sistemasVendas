<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Vendas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vendas';
    protected $primaryKey = 'id';

    public function produto()
    {
        return $this->belongsTo(Produtos::class, 'produto_id', 'id');
    }
}