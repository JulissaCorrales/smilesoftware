<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
          //  $table->bigInteger('especialidad_id')->unsigned();
            $table->bigInteger('odontologo_id')->unsigned();
            $table->string('duracionCita');
            $table->bigInteger('paciente_id')->unsigned();
            $table->datetime('stard');
            $table->string('comentarios');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('odontologo_id')->references('id')->on('odontologos')->onDelete('cascade');
            // $table->foreign('especialidad_id')->references('id')->on('especialidads')->onDelete('cascade');
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
        Schema::dropIfExists('citas');
    }
}
