<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos_clientes', function (Blueprint $table) {
            $table->increments('id_pagos');
            $table->date('FechaPago');
            $table->string('MontoPago');
            $table->integer('Cancelar');
            $table->integer('idcliente')->unsigned();
            $table->foreign('idcliente')->references('id_cliente')->on('clientes');
            $table->integer('idcatalagos')->unsigned();
            $table->foreign('idcatalagos')->references('id_catalogo')->on('catalagos');
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
        Schema::dropIfExists('pagos_clientes');
    }
}
