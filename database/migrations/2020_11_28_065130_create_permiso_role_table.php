<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_role', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('permiso_id');

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->update('cascade');
            $table->foreign('permiso_id')->references('id')->on('permisos')->onDelete('cascade')->update('cascade');
            $table->primary(['role_id','permiso_id']);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso_role');
    }
}
