<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
           
            $table->bigInteger('odontologo_id')->unsigned()->null();
            $table->string('HoraInicio');
            $table->string('HoraFinal');
            $table->string('Descanso')->null();
            $table->string('DescansoInicial')->null();
            $table->string('DescansoFinal')->null();
           
            $table->foreign('odontologo_id')->references('id')->on('odontologos')->onDelete('cascade');
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
        Schema::dropIfExists('horarios');
    }
}
