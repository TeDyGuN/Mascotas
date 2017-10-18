<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
	public $table = 'mascotas';
	/*
	 * $table->increments('id');
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
	 * */
	protected $fillable = ['id', 'nombre', 'raza', 'color', 'peso', 'id_rfid', 'esterilizado', 'descripcion'
		, 'imagen', 'dnombre', 'dapellido', 'demail', 'dci', 'direccion', 'dtelefono'];
}
