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


        Schema::table('vuelos', function (Blueprint $table) {

            $table->enum('tipo',['nacional','internacional']);
            $table->foreignIdFor(Pilotos::class);
            $table->foreignIdFor(Aeronaves::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
