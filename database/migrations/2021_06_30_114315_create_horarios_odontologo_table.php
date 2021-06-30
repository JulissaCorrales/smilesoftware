<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosOdontologoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_odontologo', function (Blueprint $table) {
          $table->unsignedBigInteger('horarios_id');
            $table->unsignedBigInteger('odontologo_id');
            $table->foreign('horarios_id')->references('id')->on('horarios')->onDelete('cascade')->update('cascade');
            $table->foreign('odontologo_id')->references('id')->on('odontologos')->onDelete('cascade')->update('cascade');
            $table->primary(['horarios_id','odontologo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios_odontologo');
    }
}
