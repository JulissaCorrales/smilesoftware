<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_horarios', function (Blueprint $table) {
            $table->unsignedBigInteger('dias_id');
            $table->unsignedBigInteger('horarios_id');

            $table->foreign('dias_id')->references('id')->on('dias')->onDelete('cascade')->update('cascade');
            $table->foreign('horarios_id')->references('id')->on('horarios')->onDelete('cascade')->update('cascade');
            $table->primary(['dias_id','horarios_id']);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dias_horarios');
    }
}
