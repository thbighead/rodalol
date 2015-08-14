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
            $table->increments('id');
            $table->string('nome');
            $table->char('sexo', 1);
            $table->string('email')->unique();
            $table->string('password', 20);
            $table->string('cpf', 15)->unique();
            $table->string('cep', 10);
            $table->string('estado', 2);
            $table->string('cidade');
            $table->string('bairro');
            $table->string('logradouro');
            $table->integer('numero', false, false)->unsigned();
            $table->string('complemento')->nullable();
            $table->boolean('admPower')->default(false);
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
