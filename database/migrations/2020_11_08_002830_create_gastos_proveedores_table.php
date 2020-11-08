<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastosProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos_proveedores', function (Blueprint $table) {
            $table->increments('id_gastos');
            $table->integer('Proveedor');
            $table->string('Nombre');
            $table->string('NumeroTelefono');
            $table->string('NITEmpresa');
            $table->string('NombreComercial');
            $table->date('FechaProximoPago');
            $table->string('MontoPago');
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
        Schema::dropIfExists('gastos_proveedores');
    }
}
