<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->integer('NoNIT');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('NumeroTelefono');
            $table->string('NITEmpresa');
            $table->string('NombreComercial');
            $table->date('FechaProximoPago');
            $table->string('MontoPago');
            $table->integer('payment_number')->nullable()->default(null);


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
        Schema::dropIfExists('clientes');
    }
}
