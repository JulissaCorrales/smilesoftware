<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('permiso_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->update('cascade');
            $table->foreign('permiso_id')->references('id')->on('permisos')->onDelete('cascade')->update('cascade');
           // $table->primary(['User_id','Permiso_id']);
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
        Schema::dropIfExists('permiso_user');
    }
}
