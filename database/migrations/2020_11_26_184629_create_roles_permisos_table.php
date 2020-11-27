<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permisos', function (Blueprint $table) {
            $table->unsignedBigInteger('Rol_id');
            $table->unsignedBigInteger('permiso_id');

            $table->foreign('Rol_id')->references('id')->on('rols')->onDelete('cascade')->update('cascade');
            $table->foreign('permiso_id')->references('id')->on('permisos')->onDelete('cascade')->update('cascade');
            $table->primary(['Rol_id','permiso_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permisos');
    }
}
