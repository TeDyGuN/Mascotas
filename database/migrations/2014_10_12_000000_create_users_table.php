<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
     * nombre    : String,
    apellido  : String,
    ci        : String,
    direccion : String,
    telefono  : String,
    email     : String,
    password  : String,
    role      : String
     * */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
	        $table->string('apellido');
	        $table->string('ci');
	        $table->string('direccion');
	        $table->string('telefono');
            $table->string('email')->unique();
            $table->string('password');
	        $table->string('role');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
