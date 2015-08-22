<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function ($table) {
            $table->integer('idPhoto')->unsigned();
            $table->foreign('idPhoto')->references('id')->on('photos');
        });

        Schema::table('orders', function ($table) {
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('idProduct')->unsigned();
            $table->foreign('idProduct')->references('id')->on('products');
        });

        Schema::table('comments', function ($table) {
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('idProduct')->unsigned();
            $table->foreign('idProduct')->references('id')->on('products');
        });

        Schema::table('answers', function ($table) {
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('idComment')->unsigned();
            $table->foreign('idComment')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
