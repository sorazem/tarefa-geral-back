<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero')->unique()->unsigned();
            $table->string('data');
            $table->integer('quantidade_produto')->unsigned();
            $table->integer('id_produto')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('pedidos', function (Blueprint $table) {
          $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('set Null');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
