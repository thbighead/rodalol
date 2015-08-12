<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('nome');
            $table->char('sexo', 1);
            $table->string('email')->unique();
            $table->string('senha', 20);
            $table->string('cpf', 15);
            $table->string('cep', 10);
            $table->string('estado', 2);
            $table->string('cidade');
            $table->string('bairro');
            $table->string('logradouro');
            $table->string('bairro');
            $table->integer('numero', false, false);
            $table->boolean('admPower');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
