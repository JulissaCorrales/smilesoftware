<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('Rol_id');
            $table->unsignedBigInteger('Usuario_id');

            $table->foreign('Rol_id')->references('id')->on('rols')->onDelete('cascade')->update('cascade');
            $table->foreign('Usuario_id')->references('id')->on('users')->onDelete('cascade')->update('cascade');
            $table->primary(['Rol_id','Usuario_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roles');
    }
}
