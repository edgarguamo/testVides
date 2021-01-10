<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 50);
            $table->enum('categoria', ['2 Estrellas', '3 Estrellas', '4 Estrellas', '5 Estrellas']);
            $table->tinyInteger('numHabitaciones');
            $table->tinyInteger('plazas');
            $table->tinyInteger('empTemp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel');
    }
}
