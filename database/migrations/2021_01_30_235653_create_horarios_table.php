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
            $table->bigInteger('dia_id')->unsigned()->null();
            $table->bigInteger('odontologo_id')->unsigned()->null();
            $table->time('HoraInicio');
            $table->time('HoraFinal');
            $table->string('Descanso');
            $table->foreign('dia_id')->references('id')->on('dias')->onDelete('cascade');
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
