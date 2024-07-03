<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pilotos;
use App\Models\Aeronaves;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('destino');
            $table->string('punto_partida');
            $table->dateTime('fechaPartida');
            $table->dateTime('fechaDestino');
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
        Schema::dropIfExists('vuelos');
    }
};
