<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Role_id');
            $table->unsignedBigInteger('User_id');

            $table->foreign('Role_id')->references('id')->on('roles')->onDelete('cascade')->update('cascade');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade')->update('cascade');
            //$table->primary(['Role_id','User_id']);
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
        Schema::dropIfExists('role_user');
    }
}
