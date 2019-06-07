<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJuridicasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('endereco_id')->unsigned();
            $table->string('nome_fantasia')->nullable();
            $table->string('razao_social')->nullable();
            $table->date('data_abertura');
            $table->string('cnpj')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('juridicas');
    }
}
