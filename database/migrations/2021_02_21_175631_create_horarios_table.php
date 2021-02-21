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
            $table->bigInteger('odontologo_id')->unsigned();
            $table->string('HoraInicio');
            $table->string('HoraFinal');
            $table->string('Descanso')->nullable();
            $table->string('DescansoInicial')->nullable();
            $table->string('DescansoFinal')->nullable();
           
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
