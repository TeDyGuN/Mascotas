<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinaria extends Model
{
	protected $table = 'veterinarias';

	protected $fillable = [
		'id', 'nombre', 'direccion', 'telefono', 'imagen', 'descripcion'
	];

}
