<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantratamientos', function (Blueprint $table) {
            $table->id();
            // $table->string('nombreTratamiento');
            $table->bigInteger('tratamiento_id')->unsigned();
            $table->string('estado');
            $table->bigInteger('paciente_id')->unsigned();
            $table->bigInteger('cita_id')->unsigned();
            $table->timestamps();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('cita_id')->references('id')->on('citas')->onDelete('cascade');
            $table->foreign('tratamiento_id')->references('id')->on('tratamientos')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantratamientos');
    }
}