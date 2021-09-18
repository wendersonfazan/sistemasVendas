<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Celular1',
            'referencia' =>  '3',
            'preco' => '1000.00',
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Celular2',
            'referencia' =>  '4',
            'preco' => '1100.00',
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Celular3',
            'referencia' =>  '6',
            'preco' => '1120.50',
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Celular4',
            'referencia' =>  '32',
            'preco' => '1232.00',
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Celular5',
            'referencia' =>  '12',
            'preco' => '11.00',
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Celular6',
            'referencia' =>  '42',
            'preco' => '111.00',
        ]);
    }
}
