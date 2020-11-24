<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdontologosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontologos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('identidad')->unique();
            $table->string('telefonoCelular');
            $table->string('telefonoFijo');
            $table->string('email');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('imagen')->default('Icono.jpg');
           $table->unsignedBigInteger('especialidad_id')->unsigned();
           $table->foreign('especialidad_id')->references('id')->on('especialidads')->onDelete('cascade')->update('cascade');

            $table->string('intervalos');
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
        Schema::dropIfExists('odontologos');
    }
}
