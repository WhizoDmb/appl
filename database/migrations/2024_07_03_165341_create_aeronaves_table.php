<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Aerolineas;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeronaves', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('tipo',['Helicoptero','Avion','Jet']);
            $table->foreignIdFor(Aerolineas::class);
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
        Schema::dropIfExists('aeronaves');
    }
};
