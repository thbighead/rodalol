<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Creydson Jeidynandson Pereira Silva',
            'sexo' => 'M',
            'email' => 'contato@rodalol.com',
            'password' => bcrypt('1000tretas'),
            'cpf' => '12345678900',
            'cep' => '25171000',
            'estado' => 'RJ',
            'cidade' => 'Rio de Janeiro',
            'bairro' => 'Centro',
            'logradouro' => 'Rua das Muambas',
            'numero' => '171',
            'complemento' => '',
            'admPower' => true
        ]);
    }
}
