<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
            [
                'nome' => "Bermuda",
                'preco' => 69.90,
                'estoque' => 20,
                'categoria_id' => 1
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => "Mouse",
                'preco' => 29.90,
                'estoque' => 10,
                'categoria_id' => 2
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => "Egeo",
                'preco' => 90.00,
                'estoque' => 5,
                'categoria_id' => 3
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => "Mesa Jantar",
                'preco' => 127.90,
                'estoque' => 90,
                'categoria_id' => 4
            ]
        );
    }
}
