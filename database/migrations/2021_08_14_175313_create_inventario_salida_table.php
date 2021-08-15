<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioSalidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_salida', function (Blueprint $table) {
           $table->unsignedBigInteger('inventario_id');
            $table->unsignedBigInteger('salida_id');

            $table->foreign('inventario_id')->references('id')->on('inventarios')->onDelete('cascade')->update('cascade');
            $table->foreign('salida_id')->references('id')->on('salidas')->onDelete('cascade')->update('cascade');
            $table->primary(['inventario_id','salida_id']);
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
        Schema::dropIfExists('inventario_salida');
    }
}
