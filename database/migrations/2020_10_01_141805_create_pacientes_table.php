<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('identidad')->unique();
            $table->string('sexo');
            $table->date('fechaNacimiento');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('telefonoCelular')->unique();
            $table->string('observaciones')->nullable(true);
            $table->string('imagen')->default('avatar1.png');

           // $table->unsignedInteger('cita_id');//relacion con cita
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
        Schema::dropIfExists('pacientes');
    }
}
