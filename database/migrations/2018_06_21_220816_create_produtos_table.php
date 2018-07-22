<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->unique();
            $table->string('nome');
            $table->float('preco');
            $table->integer('categoria_produto')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('produtos', function (Blueprint $table) {
          $table->foreign('categoria_produto')->references('id')->on('categorias')->onDelete('set Null');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
