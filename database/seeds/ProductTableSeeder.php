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
        for($i=0; $i < 20;$i++) {
            DB::table('products')->insert([
                'nome' => str_random(30),
                'categoria' => 'Processador',
                'especificacao' => 'Descrição aqui, especificação do produto. Vem que tem. Doge Doge Doge',
                'preco' => mt_rand(1, 9999),
                'qtdEstoque' => mt_rand(1, 1000),
            ]);
        }

	    for($i=0; $i < 20;$i++) {
		    DB::table('products')->insert([
			    'nome' => str_random(30),
			    'categoria' => 'Memória',
			    'especificacao' => 'Descrição aqui, especificação do produto. Vem que tem. Doge Doge Doge',
			    'preco' => mt_rand(1, 9999),
			    'qtdEstoque' => mt_rand(1, 1000),
		    ]);
	    }

    }
}
