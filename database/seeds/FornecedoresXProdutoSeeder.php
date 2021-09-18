<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FornecedoresXProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 1,
            'produto_id' => 1
        ]);
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 1,
            'produto_id' => 2
        ]);
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 1,
            'produto_id' => 3
        ]);
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 2,
            'produto_id' => 3
        ]);
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 3,
            'produto_id' => 2
        ]);
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 4,
            'produto_id' => 1
        ]);
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 5,
            'produto_id' => 4
        ]);
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 2,
            'produto_id' => 5
        ]);
        DB::table('fornecedores_x_produtos')->insert([
            'fornecedor_id' => 3,
            'produto_id' => 6
        ]);
    }
}
