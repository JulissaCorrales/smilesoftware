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
            $table->id();
            $table->unsignedBigInteger('Role_id');
            $table->unsignedBigInteger('Permiso_id');

            $table->foreign('Role_id')->references('id')->on('roles')->onDelete('cascade')->update('cascade');
            $table->foreign('Permiso_id')->references('id')->on('permisos')->onDelete('cascade')->update('cascade');
           // $table->primary(['Role_id','Permiso_id']);
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
        Schema::dropIfExists('permiso_role');
    }
}
