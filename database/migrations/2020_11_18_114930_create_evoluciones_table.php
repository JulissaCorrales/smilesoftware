<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evoluciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('paciente_id')->unsigned();
           // $table->bigInteger('odontologo_id')->unsigned();
            $table->bigInteger('plantratamiento_id')->unsigned();
            $table->string('evolucion');
            
            $table->timestamps();
            $table->foreign('plantratamiento_id')->references('id')->on('plantratamientos')->onDelete('cascade');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
           // $table->foreign('odontologo_id')->references('id')->on('odontologos')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evoluciones');
    }
}
