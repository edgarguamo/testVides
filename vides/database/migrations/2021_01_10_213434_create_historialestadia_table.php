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
            $table->id()->cascadeOnDelete();
            $table->unsignedBigInteger('idEstablecimiento')->cascadeOnDelete();
            $table->foreign('idEstablecimiento')->references('id')->on('hotel')->cascadeOnDelete();
            $table->date('fecha')->cascadeOnDelete();
            $table->integer('checkIn')->cascadeOnDelete();
            $table->integer('checkOut')->cascadeOnDelete();
            $table->integer('pernotaciones')->cascadeOnDelete();
            $table->tinyInteger('habitOcupadas')->cascadeOnDelete();
            $table->double('ventaNeta')->cascadeOnDelete();
            $table->string('tipoTarifa', 20)->cascadeOnDelete();
            $table->double('promTarifa')->cascadeOnDelete();
            $table->double('tarPer')->cascadeOnDelete();
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
