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
            $table->string('nombreTratamiento');
            $table->string('estado');
            $table->bigInteger('paciente_id')->unsigned();
            $table->unsignedInteger('odontologo_id');
            $table->unsignedInteger('cita_id');
            $table->timestamps();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
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
