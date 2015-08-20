<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 100;$i++) {
            DB::table('products')->insert([
                'nome' => str_random(30),
                'categoria' => str_random(10),
                'especificacao' => str_random(100),
                'preco' => mt_rand(1, 9999),
                'qtdEstoque' => mt_rand(1, 1000),
            ]);
        }
    }
}
