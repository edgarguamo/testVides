<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id()->cascadeOnDelete();
            $table->unsignedBigInteger('idHEstadia')->cascadeOnDelete();
            $table->foreign('idHEstadia')->references('id')->on('historialestadia')->cascadeOnDelete();
            $table->enum('tipoCliente', ['Nacional', 'Extranjero'])->cascadeOnDelete();
            $table->integer('numClientes')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
