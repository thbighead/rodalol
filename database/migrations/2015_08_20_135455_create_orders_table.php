<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quatidade')->unsigned();
            $table->boolean('finalizado')->default(false);

            //foreign keys
//            $table->integer('idUser')->unsigned();
//            $table->foreign('idUser')->references('id')->on('users');
//            $table->integer('idProduct')->unsigned();
//            $table->foreign('idProduct')->references('id')->on('products');

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
        Schema::drop('orders');
    }
}
