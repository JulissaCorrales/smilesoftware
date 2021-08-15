<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_inventario', function (Blueprint $table) {
           $table->unsignedBigInteger('inventario_id');
            $table->unsignedBigInteger('entrada_id');

            $table->foreign('inventario_id')->references('id')->on('inventarios')->onDelete('cascade')->update('cascade');
            $table->foreign('entrada_id')->references('id')->on('entradas')->onDelete('cascade')->update('cascade');
            $table->primary(['inventario_id','entrada_id']);
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
        Schema::dropIfExists('entrada_inventario');
    }
}
