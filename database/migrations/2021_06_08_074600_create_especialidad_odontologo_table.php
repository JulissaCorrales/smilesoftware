<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialidadOdontologoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidad_odontologo', function (Blueprint $table) {
             $table->unsignedBigInteger('especialidad_id');
            $table->unsignedBigInteger('odontologo_id');

            $table->foreign('especialidad_id')->references('id')->on('especialidads')->onDelete('cascade')->update('cascade');
            $table->foreign('odontologo_id')->references('id')->on('odontologos')->onDelete('cascade')->update('cascade');
            $table->primary(['especialidad_id','odontologo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especialidad_odontologo');
    }
}
