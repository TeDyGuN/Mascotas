<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
     * nombre  : String,
    raza    : String,
    color   : String,
    peso    : String,
    rfid: {
        type: Schema.ObjectId,
        ref: 'RFID'
    },
    esterilizado : String,
    duenio: {
        type: Schema.ObjectId,
        ref: 'User'
    },
    otros   : String,
    imagen  : String
     * */

    /*
     * $table->increments('id');
            $table->string('dnombre');
	        $table->string('dapellido');
	        $table->string('demail');
	        $table->string('dci');
	        $table->string('direccion');
	        $table->string('dtelefono');
	        $table->string('dcelular');
	        $table->string('mnombre');
	        $table->string('mraza');
	        $table->string('mcolor');
	        $table->string('mpeso');
	        $table->string('motros');
	        $table->string('codigo');
	        $table->string('esterilizado');
	        $table->integer('id_codigo')->unsigned();
	        $table->foreign('id_codigo')->references('id')->on('codigos');
     * */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('nombre');
	        $table->string('raza');
	        $table->string('color');
	        $table->string('peso');
	        $table->integer('id_rfid')->unsigned()->nullable();
	        $table->foreign('id_rfid')->references('id')->on('rfids');
	        $table->string('esterilizado');
	        $table->string('descripcion');
	        $table->string('imagen');
	        $table->string('dnombre');
	        $table->string('dapellido');
	        $table->string('demail');
	        $table->string('dci');
	        $table->string('direccion');
	        $table->string('dtelefono');
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
        Schema::drop('mascotas');
    }
}
