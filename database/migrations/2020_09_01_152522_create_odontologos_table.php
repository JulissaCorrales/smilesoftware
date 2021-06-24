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
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('imagen')->default('usuario.png');
            $table->bigInteger('user_id')->unsigned();
            //$table->unsignedBigInteger('especialidad_id')->unsigned();
            //$table->foreign('especialidad_id')->references('id')->on('especialidads')->onDelete('cascade')->update('cascade');
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->update('cascade');
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
