<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_permisos', function (Blueprint $table) {
            $table->unsignedBigInteger('Usuario_id');
            $table->unsignedBigInteger('permiso_id');

            $table->foreign('Usuario_id')->references('id')->on('users')->onDelete('cascade')->update('cascade');
            $table->foreign('permiso_id')->references('id')->on('permisos')->onDelete('cascade')->update('cascade');
            $table->primary(['Usuario_id','permiso_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_permisos');
    }
}
