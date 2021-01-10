<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialestadiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialestadia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idEstablecimiento');
            $table->foreign('idEstablecimiento')->references('id')->on('hotel');
            $table->string('fecha', 10);
            $table->integer('checkIn');
            $table->integer('checkOut');
            $table->integer('pernotaciones');
            $table->tinyInteger('habitOcupadas');
            $table->double('ventaNeta');
            $table->string('tipoTarifa', 20);
            $table->double('promTarifa');
            $table->double('tarPer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historialestadia');
    }
}
