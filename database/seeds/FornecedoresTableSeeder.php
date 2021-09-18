<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedores = [
            'Mercado Livre',
            'AliExpress',
            'Amazon',
            'Wish',
            'Shopee'
        ];

        foreach ($fornecedores as  $fornecedor) {
            DB::table('fornecedores')->insert([
                'nome' => $fornecedor,
            ]);
        }
    }
}
