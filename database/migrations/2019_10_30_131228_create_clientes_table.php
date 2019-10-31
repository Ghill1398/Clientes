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
            $table->bigIncrements('id');
            $table->string('nombre',50)->unique();
            $table->string('apellidos',50)->unique();
            $table->DATETIME('fechaNacimiento');
            $table->string('correo')->unique();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ip')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('sueldoAnual')->nullable();
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
