<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->unique();
            $table->string('categoria');
            $table->string('especificacao');
            $table->float('preco');
            $table->integer('qtdEstoque')->unsigned()->default(0);

            //foreign keys
            $table->integer('idPhoto')->unsigned();
            $table->foreign('idPhoto')->references('id')->on('photos');

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
        Schema::drop('products');
    }
}
